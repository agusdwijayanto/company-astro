<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\CompanyProfileController;
use Illuminate\Support\Facades\Route;

// ========== HALAMAN PUBLIK (FRONTEND) ==========
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/products', function () {
    return view('pages.products');
});


Route::get('/articles', function () {
    return view('pages.articles');
});

Route::get('/articles/{id}', function ($id) {
    $article = App\Models\Article::findOrFail($id);
    return view('pages.article-detail', compact('article'));
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

// ========== ADMIN AUTHENTICATION ==========
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

// ========== ADMIN BACKEND (Protected) ==========
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('articles', ArticleController::class);
    
    // Product PDF harus di atas resource
    Route::get('/products/pdf', [ProductController::class, 'exportPdf'])->name('products.export-pdf');
    Route::resource('products', ProductController::class);

    Route::resource('galleries', GalleryController::class);
    Route::resource('company-profile', CompanyProfileController::class);
});