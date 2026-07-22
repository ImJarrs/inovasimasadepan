<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function adminBlog(){
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('admin.blog.list', compact('blogs'));
    }

    public function index(){
        $blogs = Blog::get();
        $blogBanner = Banner::orderBy('created_at', 'asc')->limit(1)->pluck('blog_banner');
        return view('blog.index', compact('blogs', 'blogBanner'));
    }

    public function createBlog(){
        return view('admin.blog.create');
    }

    public function storeBlog(Request $request)
    {
        $validateData = $request->validate([
            'title'   => 'required|string|unique:blogs,title',
            'desc1'   => 'nullable|string',
            'desc2'   => 'nullable|string',
            'image1'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image2'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
    
        // Generate slug dari title (belum tentu final, tapi cukup untuk sementara folder)
        $tempSlug = Str::slug($validateData['title']);
    
        $storedPaths = [];
    
        foreach (['image1', 'image2'] as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = uniqid() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
                $path = $file->storeAs("uploads/blogs/{$tempSlug}", $filename, 'public');
                $storedPaths[$field] = $path;
            }
        }
    
        // Gabungkan data validasi dan path image
        $blog = Blog::create(array_merge($validateData, $storedPaths));
    
        // Pindahkan file ke folder sesuai slug final dari database
        $finalSlug = $blog->slug;
        if ($finalSlug !== $tempSlug) {
            foreach (['image1', 'image2'] as $field) {
                if (!empty($storedPaths[$field]) && Storage::disk('public')->exists($storedPaths[$field])) {
                    $oldPath = $storedPaths[$field];
                    $newPath = str_replace("uploads/blogs/{$tempSlug}", "uploads/blogs/{$finalSlug}", $oldPath);
                    Storage::disk('public')->makeDirectory("uploads/blogs/{$finalSlug}");
                    Storage::disk('public')->move($oldPath, $newPath);
                    $blog->$field = $newPath;
                }
            }
    
            $blog->save(); // Simpan path baru
            Storage::disk('public')->deleteDirectory("uploads/blogs/{$tempSlug}");
        }
    
        return redirect()->route('admin.blog')->with('success', 'Blog added successfully!');
    }
    
    public function destroyBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $directory = "uploads/blogs/{$blog->slug}";
    
        if (Storage::disk('public')->exists($directory)) {
            Storage::disk('public')->deleteDirectory($directory);
        }
    
        $blog->delete();
    
        return redirect()->route('admin.blog')->with('success', 'Blog deleted successfully!');
    }
    
    public function editBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }
    
    public function updateBlog(Request $request, $id)
    {
        $validateData = $request->validate([
            'title'   => 'required|string|unique:blogs,title,' . $id,
            'desc1'   => 'nullable|string',
            'desc2'   => 'nullable|string',
            'image1'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image2'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
    
        $blog = Blog::findOrFail($id);
        $oldSlug = $blog->slug;
    
        $storedPaths = [];
    
        // Upload file ke folder lama dulu (sementara)
        foreach (['image1', 'image2'] as $field) {
            if ($request->hasFile($field)) {
                // Hapus file lama jika ada
                if ($blog->$field && Storage::disk('public')->exists($blog->$field)) {
                    Storage::disk('public')->delete($blog->$field);
                }
    
                $file = $request->file($field);
                $filename = uniqid() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
                $path = $file->storeAs("uploads/blogs/{$oldSlug}", $filename, 'public');
                $storedPaths[$field] = $path;
            }
        }
    
        $blog->update(array_merge($validateData, $storedPaths));
    
        // Cek jika slug berubah setelah update
        $newSlug = $blog->slug;
    
        if ($newSlug !== $oldSlug) {
            $oldDir = "uploads/blogs/{$oldSlug}";
            $newDir = "uploads/blogs/{$newSlug}";
    
            if (Storage::disk('public')->exists($oldDir)) {
                Storage::disk('public')->makeDirectory($newDir);
                $files = Storage::disk('public')->allFiles($oldDir);
    
                foreach ($files as $file) {
                    $newPath = str_replace($oldDir, $newDir, $file);
                    Storage::disk('public')->move($file, $newPath);
    
                    // Update path baru di database
                    if ($blog->image1 && str_contains($blog->image1, $file)) {
                        $blog->image1 = $newPath;
                    }
                    if ($blog->image2 && str_contains($blog->image2, $file)) {
                        $blog->image2 = $newPath;
                    }
                }
    
                Storage::disk('public')->deleteDirectory($oldDir);
                $blog->save();
            }
        }
    
        return redirect()->route('admin.blog')->with('success', 'Blog updated successfully!');
    }

    public function detail($slug){
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.details', compact('blog'));
    }
}
