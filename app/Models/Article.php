<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    use HasFactory;


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function path(){
        return '/article/' . $this->slug;
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
