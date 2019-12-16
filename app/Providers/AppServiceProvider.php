<?php

namespace App\Providers;

use App\Models\PriceCategoryModel;
use Illuminate\Support\ServiceProvider;
use App\Observers\CategoryObserver;

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
        PriceCategoryModel::observe(CategoryObserver::class);
    }
}
