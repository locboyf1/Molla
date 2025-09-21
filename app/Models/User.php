<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class User extends Authenticatable
{
    protected $fillable = [
        "name",
        "email",
        "password",
        "avatar",
        "role_id",
        "is_active",
        "created_at"
    ];
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
