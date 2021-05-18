<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable=['body','style','name','slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function path(){
        return '/'.$this->slug.'/';
    }



}
