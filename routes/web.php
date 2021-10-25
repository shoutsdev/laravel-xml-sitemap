<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class,'index'])->name('sitemap.xml');
Route::get('/sitemap.xml/post', [\App\Http\Controllers\SitemapController::class,'posts'])->name('post.xml');
Route::get('/sitemap.xml/category', [\App\Http\Controllers\SitemapController::class,'category'])->name('category.xml');
Route::get('/sitemap.xml/subcategory', [\App\Http\Controllers\SitemapController::class,'subcategory'])->name('subcategory.xml');
