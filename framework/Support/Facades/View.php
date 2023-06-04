<?php

namespace Framework\Support\Facades;

class View {
    /**
     * Return view file
     * 
     * @param  string $path path of view file
     * @return string
     */
    public function __construct(string $path)
    {
        return $this->make($path);
    }


    /**
     * Return view file
     * 
     * @param  string $path path of view file
     * @return string
     */
    public static function make(string $path)
    {
        return include_once VIEW_BASE_PATH."/$path.php";
    } 
}