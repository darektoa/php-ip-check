<?php

namespace Framework\Support\Facades;

use Framework\Support\Arr;

class Route {
    /**
     * Get current client Request URI information
     * 
     * @return array
     */
    public static function current() :array
    {
        $uri        = trim($_SERVER['REQUEST_URI']);
        $href       = APP_URL."/$uri";
        $query      = explode("?", $uri, 2)[1] ?? null;
        $pathname   = explode("?", $uri, 2)[0] ?? null;
        $method     = $_SERVER['REQUEST_METHOD'];

        return [
            'uri'       => $uri, 
            'href'      => $href, 
            'query'     => $query, 
            'pathname'  => $pathname,
            'method'    => $method
        ];
    } 
    

    /**
     * Check the current client Request URI for a match
     * 
     * @param  string $uri URI of route
     * @return bool
     */
    public static function is(string $uri, string $method='GET') :bool
    {
        $request    = static::current();

        return (
            $uri === $request['pathname'] &&
            $method === $request['method']
        );
    } 


    /**
     * Define route with GET method
     * 
     * @param  string $uri URI of route
     * @param  array|object $action Callable function or Controller for callback when route is match
     * @return void
     */
    public static function get(string $uri, array|object $action) :void
    {
        if(!static::is($uri))
            return;

        if(Arr::is($action)) {
            $class  = $action[0];
            $method = $action[1];
            call_user_func([$class, 'callAction'], $method);
        }else {
            self::$action();
        }
    }
}