<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class,"index"]); 
Route::get("/Home", [HomeController::class,"index"]); 


Route::prefix("products")->group(function () {
    Route::get("/", [ProductController::class,"index"]);
    Route::get("/{id}/{alias}.html", [ProductController::class,"detail"])->name('products.detail');
});


