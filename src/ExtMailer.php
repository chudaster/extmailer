<?php

namespace Chudaster\Service;

use Illuminate\Mail\Events\MessageSending;
use Illuminate\Support\Facades\App;
use App
class ExtMailer
{
    public function handle( MessageSending $event )
    {
        if(App::environment() === 'local'){
            $event->message->setTo([current(config('extmailer')) => current($event->message->getTo())]);
        }
        return $event;
    }
}
