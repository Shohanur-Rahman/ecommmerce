<?php

namespace App\Providers;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       View::composer(['admin.modules.settings.website.product_features.partial.*'],function ($view){
            $view->with('categories',ProductCategory::with('childrens.childrens')->get());
            dd(ProductCategory::with('childrens.childrens')->get());
        });
    }
}
