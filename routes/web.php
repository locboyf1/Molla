<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class,"index"]); 
Route::get("/Home", [HomeController::class,"index"])->name('home'); 


Route::prefix("Products")->group(function () {
    Route::get("/", [ProductController::class,"index"]);
    Route::get("/{id}/{alias}/{option?}.html", [ProductController::class,"detail"])->name('products.detail');
});

Route::prefix("Blogs")->group(function () {
    Route::get("/", [BlogController::class,"index"]);
    Route::get("/{id}/{alias}.html", [BlogController::class,"detail"])->name('blogs.detail');
});

Route::get("Register", [AuthController::class,"register"])->name("register");
Route::post("Register", [AuthController::class,"postRegister"])->name("postRegister");

Route::get("Login", [AuthController::class,"login"])->name("login");
Route::post("Login", [AuthController::class,"postLogin"])->name("postLogin");

Route::get("Logout", [AuthController::class,"logout"])->name("logout");
