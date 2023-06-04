<?php

namespace Framework\Http;

class Request {
    /**
     * Retrieve client IP Adderss
     * 
     * @return string
     */
    public static function ip() {
        return getenv('HTTP_CLIENT_IP')?:
            getenv('HTTP_X_FORWARDED_FOR')?:
            getenv('HTTP_X_FORWARDED')?:
            getenv('HTTP_FORWARDED_FOR')?:
            getenv('HTTP_FORWARDED')?:
            getenv('REMOTE_ADDR');
    }
}