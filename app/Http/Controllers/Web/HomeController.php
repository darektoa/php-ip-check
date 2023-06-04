<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Framework\Http\Request;

class HomeController extends Controller {
    /**
     * View home
     * 
     * @return void
     */
    public function index()
    {
        $path    = storage('/ip.json');
        $file    = fopen($path, 'r');
        $content = (object) json_decode(fread($file, 1000));
        
        if($ip = Request::ip()) $content->data[] = $ip;
        fclose($file);

        $file = fopen($path, 'w+');
        fwrite($file, json_encode($content));
        fclose($file);

        return;
    }
}