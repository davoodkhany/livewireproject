<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function uploder($file,$path){


        $filename="coinex"."-". $file->getClientOriginalName();
        $root=public_path($path);

        $file->move($root,$filename);

        return $filename;
    }

    public function uploadimage(){

        // return request()->all();
        $this->validate(request(),[
            'upload'=>'required'
            ]);
        $file=request()->file('upload');
        $filename=$file->getClientOriginalName();
            $year=Carbon::now()->year();
            $imagepath="/upload/images/{$year}/";

        if (file_exists(public_path($imagepath).$filename)) {
            $filename=Carbon::now()->timestamp.$filename;
        }
        $file->move(public_path($imagepath),$filename);
        $url=$imagepath.$filename;

        return "<script>window.parent.CKEDITOR.tools.callFunction(1,'{$url}','آپلود شد')</script>";
    }
}
