<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;

class BannerController extends Controller
{
        public function adminBanner(){
            $banners = Banner::orderBy('created_at', 'desc')->get();
    
            return view('admin.banner.list', compact('banners'));
        }
    
        public function createBanner(){
            return view('admin.banner.create');
        }
    
        public function storeBanner(Request $request)
        {
            $request->validate([
                'home_banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                'promo_banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                'blog_banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                'card_banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                'wristband_banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            ]);
    
            $banners = [];
    
            foreach (['home_banner', 'promo_banner', 'blog_banner', 'card_banner', 'wristband_banner'] as $bannerType) {
                if ($request->hasFile($bannerType)) {
                    $file = $request->file($bannerType);
                    $filename = uniqid() . '_' . $file->getClientOriginalName();
                    $path = $file->storeAs("uploads/banners/$bannerType", $filename, 'public');
    
                    $banners[$bannerType] = $path;
                }
            }
    
            Banner::create($banners);
        
            return redirect()->route('admin.banner')->with('success', 'Banner uploaded successfully.');
        }
    
        /**
         * Show the form for editing the specified banner.
         */
        public function editBanner(Banner $banner, $id)
        {
            $banner = Banner::findOrFail($id);
            return view('admin.banner.edit', compact('banner'));
        }
    
        /**
         * Update the specified banner.
         */
        public function updateBanner(Request $request, $id)
        {
            $request->validate([
                'home_banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                'promo_banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                'blog_banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                'card_banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                'wristband_banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            ]);

            $banner = Banner::findOrFail($id);

            foreach (['home_banner', 'promo_banner', 'blog_banner', 'card_banner', 'wristband_banner'] as $bannerType) {
                if ($request->hasFile($bannerType)) {
                    // Hapus file lama jika ada
                    if ($banner->$bannerType) {
                        Storage::delete('public/' . $banner->$bannerType);
                    }

                    $file = $request->file($bannerType);
                    $filename = uniqid() . '_' . $file->getClientOriginalName();
                    $path = $file->storeAs("uploads/banners/$bannerType", $filename, 'public');

                    $banner->$bannerType = $path;
                }
            }

            $banner->save();

            return redirect()->route('admin.banner')->with('success', 'Banner updated successfully.');
        }

    
        /**
         * Remove the specified banner.
         */
        public function destroyBanner($id)
        {
            $banner = Banner::findOrFail($id);

            // Hapus semua gambar yang ada di storage
            foreach (['home_banner', 'promo_banner', 'blog_banner', 'card_banner', 'wristband_banner'] as $bannerType) {
                if ($banner->$bannerType) {
                    Storage::delete('public/' . $banner->$bannerType);
                }
            }

            // Hapus data dari database
            $banner->delete();

            return redirect()->route('admin.banner')->with('success', 'Banner deleted successfully.');
        }

}
