<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    public function admin(){
        $blogs = Blog::get();
        return view('admin.index', compact('blogs'));
    }
}
