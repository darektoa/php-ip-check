<?php

namespace Framework\Support;

class Arr {
    public static function is($var) {
        return gettype($var) === 'array';
    }
}