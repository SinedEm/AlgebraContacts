<?php

class Config
{
    private function __construct(){}
    private function __clone(){}

    public static function get($file)
    {
        if($file) {
            $items = require $file.'.php';
            return $items;
        }
        return false;
    }
}
