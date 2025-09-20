<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class,"index"]); 
Route::get("/Home", [HomeController::class,"index"]); 


Route::prefix("Products")->group(function () {
    Route::get("/", [ProductController::class,"index"]);
    Route::get("/{id}/{alias}/{option?}.html", [ProductController::class,"detail"])->name('products.detail');
});

Route::prefix("Blogs")->group(function () {
    Route::get("/", [BlogController::class,"index"]);
    Route::get("/{id}/{alias}.html", [BlogController::class,"detail"])->name('blogs.detail');
});


