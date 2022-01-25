<?php

namespace Modules\Core\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        Blade::directive('css', function ($expression) {
            list($module,$file_name) = explode(',',$expression);
            return <<<HTML
                <link rel="stylesheet" href="{{ asset('css/' . $module. '/' . $file_name . '.css') }}">
HTML;
        });

        Blade::directive('themecss', function ($expression) {
            list($file_name) = explode(',',$expression);
            return <<<HTML
                <link rel="stylesheet" href="{{ asset('themes/' . config('core.theme') .'/assets/css/' . $file_name . '.css') }}">
HTML;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
