<?php

namespace App\Providers;

use App\Models\Catogery;
use App\Models\Setting;
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
    {   view()->composer('layouts.web.footer', function ($view) {
        $setting = Setting::first();
        $view->with('company_data',$setting);
     
    });

    view()->composer('layouts.web.head', function ($view) {
        $catogeries = Catogery::all();
        $view->with('catogeries',$catogeries);
     
    });
    }
}