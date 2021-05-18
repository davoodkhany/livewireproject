<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    protected $table='menus';
    use HasFactory;

    public function childs() {

        return $this->hasMany(Menu::class,'parent','id') ;

    }
}
