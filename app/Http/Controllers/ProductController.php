<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        
    }

       public function detail($id, $alias)
    {
        $product = Product::find(intval($id))->with('category_product')->with('product_options')->with('company')->first();
        return view('content.products.detail', ['product' => $product, 'active' => 'Products']);
    }
}
