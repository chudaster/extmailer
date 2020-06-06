<?php

namespace Chudaster\Service;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider;

class ExtmailerServiceProvider extends EventServiceProvider
{

    protected $listen = [
        'Illuminate\Mail\Events\MessageSending' => [
            'Chudaster\Service\ExtMailer',
        ],
    ];

    public function boot() {
        parent::boot();
        $this->publishes([__DIR__ . '/../config/' => config_path() . '/']);
    }
    public function register() {
        parent::register();
        $this->mergeConfigFrom(
            __DIR__.'/../config/extmailer.php', 'extmailer'
        );
    }
}
