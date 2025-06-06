<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function work()
    {
        return $this->hasMany(Work::class);
    }

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
}
