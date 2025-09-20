<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $table = 'product_options';
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}