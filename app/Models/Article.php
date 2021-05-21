<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['id','title','slug','body','discription','image','language','status','user_id','seodescription','opengraphdescription','seotitle','opengraphtitle'];


    use HasFactory;


    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function path(){
        return '/article/' . $this->slug;
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
