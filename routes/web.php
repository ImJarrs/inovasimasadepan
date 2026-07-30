<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductShowcaseController;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/check-updates', [HomeController::class, 'checkUpdates'])->name('check.updates');

Route::get('/about', function () {
    return redirect()->route('home') . '#about';
})->name('home.about');

Route::get('/contact', function () {
    return redirect()->route('home') . '#contact';
})->name('home.contact');

Route::get('/recom-services', function () {
    return view('services.recom');
})->name('services.recom');

Route::get('/selfq-services', function () {
    return view('services.selfq');
})->name('services.selfq');

Route::get('/splus-services', function () {
    return view('services.splus');
})->name('services.splus');

// SEND EMAIL
Route::post('/send', [HomeController::class, 'send'])->name('send');

// PRODUCTS
Route::get('/product-rfid-card', [ProductController::class, 'card'])->name('product.card');
Route::get('/product-rfid-wristband', [ProductController::class, 'wristband'])->name('product.wristband');
Route::get('/products/rfid-showcase', [ProductShowcaseController::class, 'rfid'])->name('product.showcase.rfid');

// BLOGS
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'detail'])->name('blog.detail');


// AUTH
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

    
    // ADMIN BANNER
    Route::get('/admin/banner', [BannerController::class, 'adminBanner'])->name('admin.banner');
    Route::get('/admin/banner/create', [BannerController::class, 'createBanner'])->name('admin.banner.create');
    Route::post('/admin/banner/store', [BannerController::class, 'storeBanner'])->name('admin.banner.store');
    Route::get('/admin/banner/{id}/edit', [BannerController::class, 'editBanner'])->name('admin.banner.edit');
    Route::put('/admin/banner/{id}/update', [BannerController::class, 'updateBanner'])->name('admin.banner.update');
    Route::delete('/admin/banner/{id}', [BannerController::class, 'destroyBanner'])->name('admin.banner.destroy');

    // ADMIN BLOG
    Route::get('/admin/blog', [BlogController::class, 'adminBlog'])->name('admin.blog');
    Route::get('/admin/blog/create', [BlogController::class, 'createBlog'])->name('admin.blog.create');
    Route::post('/admin/blog/store', [BlogController::class, 'storeBlog'])->name('admin.blog.store');
    Route::get('/admin/blog/{id}/edit', [BlogController::class, 'editBlog'])->name('admin.blog.edit');
    Route::put('/admin/blog/{id}/update', [BlogController::class, 'updateBlog'])->name('admin.blog.update');
    Route::delete('/admin/blog/{id}', [BlogController::class, 'destroyBlog'])->name('admin.blog.destroy');

    // ADMIN PRODUCT SHOWCASE
    Route::get('/admin/product-showcase', [ProductShowcaseController::class, 'adminIndex'])->name('admin.product.showcase.index');
    Route::get('/admin/product-showcase/create', [ProductShowcaseController::class, 'create'])->name('admin.product.showcase.create');
    Route::post('/admin/product-showcase', [ProductShowcaseController::class, 'store'])->name('admin.product.showcase.store');
    Route::get('/admin/product-showcase/{product_showcase}/edit', [ProductShowcaseController::class, 'edit'])->name('admin.product.showcase.edit');
    Route::put('/admin/product-showcase/{product_showcase}', [ProductShowcaseController::class, 'update'])->name('admin.product.showcase.update');
    Route::delete('/admin/product-showcase/{product_showcase}', [ProductShowcaseController::class, 'destroy'])->name('admin.product.showcase.destroy');
});

