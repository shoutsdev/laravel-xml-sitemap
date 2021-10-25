<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;

class SitemapController extends Controller
{
    public function index()
    {
        $posts = Post::first();
        $categories = Category::first();
        $subcategories = Subcategory::first();
        return response()->view('sitemaps.index', [
            'posts' => $posts,
            'category' => $categories,
            'subcategory' => $subcategories,
        ])->header('Content-Type', 'text/xml');
    }

    public function posts()
    {
        $post = Post::latest()->get();
        return response()->view('sitemaps.post', [
            'posts' => $post,
        ])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $category = Category::all();
        return response()->view('sitemaps.category', [
            'categories' => $category,
        ])->header('Content-Type', 'text/xml');
    }

    public function subcategories()
    {
        $subcategory = Subcategory::all();
        return response()->view('sitemaps.subcategory', [
            'subcategories' => $subcategory,
        ])->header('Content-Type', 'text/xml');
    }
}
