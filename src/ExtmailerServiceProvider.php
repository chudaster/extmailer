<?php

namespace Chudaster\Service;

use Illuminate\Support\ServiceProvider;
use App;


class ExtmailerServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->publishes([__DIR__ . '/../config/' => config_path() . '/']);    

        $this->app->singleton('mailer', function (Container $app) {

            // ...

            $mailer = new \Chudaster\Service\Mailer(
                $app['view'], $app['swift.mailer'], $app['events']
            );

            // ...

            return $mailer;
        });
    }

 
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/extmailer.php', 'extmailer'
        );
     }
}
