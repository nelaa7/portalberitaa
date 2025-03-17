<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\Author;
use App\Models\BannerAdvertisement;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $categories = Category::all();

        $notfeatured_articles = ArticleNews::with(['category'])
        ->where('is_featured', 'not_featured')
        ->latest()
        ->take(3)
        ->get();

        $featured_articles = ArticleNews::with(['category'])
        ->where('is_featured', 'featured')
        ->inRandomOrder()
        ->take(3)
        ->get();

        $authors = Author::all();

        $bannerads = BannerAdvertisement::where('is_active', 'active')
        ->where('type', 'banner')
        ->inRandomOrder()
        // ->take(1)
        ->first();
        
        $entertaiment_articles = ArticleNews::whereHas('category', function ($query){
            $query->where('name', 'Entertaiment');
        })
        ->where('is_featured','not_featured')
        ->latest()
        ->take(6)
        ->get();

        $entertaiment_featured_articles = ArticleNews::whereHas('category', function ($query){
            $query->where('name', 'Entertaiment');
        })
        ->where('is_featured','featured')
        ->inRandomOrder()
        ->first();

        $business_articles = ArticleNews::whereHas('category', function ($query){
            $query->where('name', 'Business');
        })
        ->where('is_featured','not_featured')
        ->latest()
        ->take(6)
        ->get();

        $business_featured_articles = ArticleNews::whereHas('category', function ($query){
            $query->where('name', 'Business');
        })
        ->where('is_featured','featured')
        ->inRandomOrder()
        ->first();

        $politics_articles = ArticleNews::whereHas('category', function ($query){
            $query->where('name', 'Politics');
        })
        ->where('is_featured','not_featured')
        ->latest()
        ->take(6)
        ->get();

        $politics_featured_articles = ArticleNews::whereHas('category', function ($query){
            $query->where('name', 'Politics');
        })
        ->where('is_featured','featured')
        ->inRandomOrder()
        ->first();


        return view('front.index', compact(
            'entertaiment_featured_articles',
            'bannerads',
            'entertaiment_articles',
            'categories',
            'notfeatured_articles', 
            'authors', 
            'featured_articles',
            'business_articles',
            'business_featured_articles',
            'politics_articles',
            'politics_featured_articles',
        ));
    }
}
