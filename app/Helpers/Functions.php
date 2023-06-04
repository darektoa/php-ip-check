<?php

use Framework\Support\Facades\View;

/**
 * Return view file
 * 
 * @param  string $path path of view file
 * @return string
 */
function view($path)
{
    return View::make($path);
}

/**
 * Get file path in the storage
 * 
 * @param  string $path 
 * @return string
 */
function storage($path)
{
    return ROOT_DIR."/storage$path";
}
