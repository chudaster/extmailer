<?php 

namespace Chudaster\Service;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class ExtmailerFacade extends IlluminateFacade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'mailer'; }

}
