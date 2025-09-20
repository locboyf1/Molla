<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\CategoryBlog;

class HomeController extends Controller
{
    public function index()
    {
        $category_products = CategoryProduct::orderBy('position', 'asc')->with('products')->get();
        $products = Product::orderBy('created_at', 'desc')->with('category_product')->with('product_options')->get();
        $blogs = Blog::orderBy('created_at', 'desc')->with('category_blog')->get();
        return view('content.home', ['category_products' => $category_products, 'products' => $products, 'blogs' => $blogs, 'active' => 'Home']);
    }
}