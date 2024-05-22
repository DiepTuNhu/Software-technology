<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use App\Models\Category;
use App\Models\ServicePoint;
=======
<<<<<<< HEAD
use App\Models\Category;
use App\Models\ServicePoint;
=======

>>>>>>> ebe797942ebcf8a979540bc946870bbe5acacdfa
>>>>>>> d11ceec2296ff6f7445fe8d4fb1716a7490ae76a
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d11ceec2296ff6f7445fe8d4fb1716a7490ae76a
        view()->composer('user.header', function($view) {
            $categories = Category::all();
            $view->with('categories', $categories);
        });
        view()->composer('user.footer', function($view) {
            $categories = Category::all();
            $service_points = ServicePoint::all();
        
            $view->with('categories', $categories)
                 ->with('service_points', $service_points);
        });
<<<<<<< HEAD
=======
=======
        //
>>>>>>> ebe797942ebcf8a979540bc946870bbe5acacdfa
>>>>>>> d11ceec2296ff6f7445fe8d4fb1716a7490ae76a
    }
}
