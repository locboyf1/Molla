<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {

    }

    public function detail($id, $alias, $option = 1)
    {
        $product = Product::find(intval($id))->with('category_product')->with('product_options')->with('company')->first();
        $product_option = $product->product_options()->where('position','=',$option)->first();
        if(!$product_option){
            $product_option = $product->product_options()->where('position','=',1)->first();
        }
        return view('content.products.detail', ['product' => $product, 'product_option' => $product_option, 'active' => 'Products']);
    }
}
