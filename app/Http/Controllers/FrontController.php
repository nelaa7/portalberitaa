<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\Author;
use App\Models\BannerAdvertisement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


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

    public function category(Category $category){
        $categories = Category::all();

        $bannerads = BannerAdvertisement::where('is_active', 'active')
        ->where('type', 'banner')
        ->inRandomOrder()
        // ->take(1)
        ->first();


        return view('front.category', compact('bannerads','category', 'categories'));
    }

    public function author(Author $author){
        $categories = Category::all();

        $bannerads = BannerAdvertisement::where('is_active', 'active')
        ->where('type', 'banner')
        ->inRandomOrder()
        // ->take(1)
        ->first();


        return view('front.author', compact('bannerads','categories', 'author'));
        
    }

    public function search(Request $request){
        $request->validate([
            'keyword' => ['required', 'string', 'max:225'],
        ]);

        $categories = Category::all();
        $keyword = $request->keyword;
        $articles = ArticleNews::with(['category', 'author'])
        ->where('name','like','%' . $keyword . '%')->paginate(6);

        return view('front.search', compact('articles', 'keyword', 'categories'));
    }

    public function details(ArticleNews $articleNews){
        $categories = Category::all();
        $articles = ArticleNews::with(['category'])
        ->where('is_featured', 'not_featured')
        ->where('id', '!=', $articleNews->id)
        ->latest()
        ->take(3)
        ->get();
        $bannerads = BannerAdvertisement::where('is_active', 'active')
        ->where('type', 'banner')
        ->inRandomOrder()
        // ->take(1)
        ->first();
        $square_ads = BannerAdvertisement::where('is_active', 'active')
        ->where('type', 'square')
        ->inRandomOrder()
        ->take(2)
        ->get();

        if($square_ads->count() < 2){
            $square_ads_1 = $square_ads->first();
            $square_ads_2 = null;
        } else {
            $square_ads_1 = $square_ads->get(0);
            $square_ads_2 = $square_ads->get(1);
        }

        $author_news = ArticleNews::where('author_id', $articleNews->author_id)
        ->where('id', '!=', $articleNews->id)
        ->inRandomOrder()
        ->get();
 


        return view('front.details', compact('author_news','square_ads_1','square_ads_2','bannerads','articleNews', 'categories', 'articles'));
    }

    public function about(){
        $categories = Category::all();

        return view('front.about', compact('categories'));
    }

    // public function navbar(){
    //     $categories = Category::all();

    //     return view('components.navbar', compact('categories'));
    // }
    public function boot()
{
    View::composer('components.navbar', function ($view) {
        $view->with('categories', Category::all());
    });
}
}
