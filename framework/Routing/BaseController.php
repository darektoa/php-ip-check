<?php

namespace Framework\Routing;

class BaseController {
    /**
     * Execute an action on the controller.
     *
     * @param string $action
     * @param array $parameters
     * @return void
     */
    public static function callAction(string $action, array $parameters=[]) :void
    {  
        call_user_func_array(
            [(new static), $action],
            $parameters
        );
    }
}   