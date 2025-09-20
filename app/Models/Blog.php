<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function category_blog()
    {
        return $this->belongsTo(CategoryBlog::class);
    }
    public function account(){
        return $this->belongsTo(Account::class);
    }

    
}
