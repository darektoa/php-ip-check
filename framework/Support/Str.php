<?php

namespace Framework\Support;

class Str {
    public static function is($var) {
        return gettype($var) === 'string';
    }
}