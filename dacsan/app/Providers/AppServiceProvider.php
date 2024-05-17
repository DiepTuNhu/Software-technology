<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use App\Models\Category;
use App\Models\ServicePoint;
=======

>>>>>>> ebe797942ebcf8a979540bc946870bbe5acacdfa
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
=======
        //
>>>>>>> ebe797942ebcf8a979540bc946870bbe5acacdfa
    }
}
