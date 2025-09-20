<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category_product()
    {
        return $this->belongsTo(CategoryProduct::class);
    }

    public function product_options()
    {
        return $this->hasMany(ProductOption::class);
    }
    public function company() {
        return $this->belongsTo(Company::class);
    }

    
}