<?php

namespace LaravelTrumbowyg\Frameworks\Illuminate;

use Artcrud\Commands\CreateTable;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as Base;

/**
 * Class ServiceProvider
 * @package PrizyvaNet\Vault\Frameworks\Illuminate
 */
class ServiceProvider extends Base
{
    public function register()
    {

    }

    public function boot(){



        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'laravel-trumbowyg');


        $this->publishes([
            __DIR__.'/../../resources/public' => public_path('vendor/laravel-trumbowyg'),
        ], 'laravel-trumbowyg');

        $this->publishes([
            __DIR__.'/../../config/laravel-trumbowyg.php' => config_path('laravel-trumbowyg.php'),
        ],"laravel-trumbowyg");
        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/admin_blocks'),
        ],"laravel-trumbowyg");


    }

}
