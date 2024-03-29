<?php

namespace App\Providers;

use App\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
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
        $this->app->bind('path.public', function() {
            return base_path().'/public_html';
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Request::macro('breadcrumbs', function () {
            return new Breadcrumbs($this);
        });
    }
}
