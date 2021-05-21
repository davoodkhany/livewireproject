<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',\App\Http\Livewire\Publics\Index::class);

Route::get('/تیم-ما',\App\Http\Livewire\Publics\OurTeam::class);

Route::get('/about-us',\App\Http\Livewire\Publics\ContactUs::class);
Route::get('/website-design-in-Qazvin',\App\Http\Livewire\Publics\WebDesign::class);

Route::get('/article',\App\Http\Livewire\Publics\Article::class);

Route::get('/article/{article}',\App\Http\Livewire\Publics\Single::class);

Route::get('/article/category/{category}',\App\Http\Livewire\Publics\Category::class);




Route::prefix('/admin/dashboard')->middleware(['auth:web','verified'])->group(function () {

    Route::get('/', \App\Http\Livewire\Admin\Dashboard::class)->name('dashboard');
    Route::get('/user/all', \App\Http\Livewire\Admin\Users\Allusers::class)->name('admin.alluser');
    Route::get('/user/edit/{user}', \App\Http\Livewire\Admin\Users\EditUser::class)->name('admin.edituser');

    //!! Article Create, Store, Edit, Update, Delete Resource Controller
    Route::resource('blogs', \App\Http\Controllers\Admin\ArticleController::class);

     //!! Ckeditor Upload image

    Route::post('/ckeditor/upload', [\App\Http\Controllers\CKEditorController::class, 'upload'])->name('ckeditor.image-upload');


});












//   Route::group()->grmiddleware(['auth:web', 'verified'])->get('admin/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



// Route::fallback(function () {
//     return view('errors.404');
//   });



