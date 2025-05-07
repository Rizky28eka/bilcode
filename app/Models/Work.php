<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Work extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['category', 'contributor'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function contributor()
    {
        return $this->belongsTo(Contributor::class, 'id', 'work_id');
    }

    public function contributors()
    {
        return $this->hasMany(Contributor::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}