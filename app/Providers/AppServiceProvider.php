<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Menu;
use App\Models\CategoryProduct;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('partials.header', function ($view) {
            $menus = Menu::whereNull('parent_id')->orderBy('position','asc')->with('children')->get();
            $category_products = CategoryProduct::orderBy('position','asc')->get();
            $view->with(compact('menus', 'category_products'));
        });
    }
}
