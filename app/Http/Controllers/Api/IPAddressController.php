<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class IPAddressController extends Controller {
    /**
     * Get list of IP Addresses
     * 
     * @return object
     */
    public function index() {
        $path    = storage('/ip.json');
        $file    = fopen($path, 'r');
        $content = fread($file, filesize($path));
        
        header('Content-Type: application/json; charset=utf-8');
        return print(json_encode($content));
    }
}