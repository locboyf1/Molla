<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $table = 'category_products';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}