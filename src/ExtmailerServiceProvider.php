<?php

namespace Chudaster\Service;

use Illuminate\Support\ServiceProvider;
use Chudaster\Service\Extmailer;
use App;


class ExtmailerServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->publishes([__DIR__ . '/../config/' => config_path() . '/']);    

        //$this->publishes([__DIR__ . '/../app/' => app_path() . '/']);


        //$this->loadViewsFrom(app_path() .'/Widgets/views', 'Widgets');
    }

 
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/extmailer.php', 'extmailer'
        );
        $this->app->singleton(Mail::class, function ($app){
            return new Extmailer();
        });

     }
}
