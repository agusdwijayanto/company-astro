<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\CompanyProfile;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArticles = Article::count();
        $totalProducts = Product::count();
        $totalGalleries = Gallery::count();
        $totalProfiles = CompanyProfile::count();

        return view('admin.dashboard', compact(
            'totalArticles',
            'totalProducts',
            'totalGalleries',
            'totalProfiles'
        ));
    }
}