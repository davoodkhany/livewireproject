<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menus=Menu::where('status','1')->orderBy('sort','Asc')->get();
        $submenus=Menu::where('status','1')->where('parent','!=','0')->orderBy('sort','Asc')->get();
        View::share('menus', $menus);
        View::share('submenu', $submenus);
    }
}
