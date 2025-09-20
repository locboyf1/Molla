<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
