<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="categories";

    public function path(){
        return '/article/category/'. $this->slug;
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
}
