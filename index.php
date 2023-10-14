<?php

class Box {
    public $width;
    public static $count = 0;

    public static function getCount() {
        var_dump(self::$count);
    }
}

class MetalBox extends Box {
    public static $count = 5;
}

Box::getCount();
Box::$count = 1;
Box::$count = 2;
var_dump(Box::$count);
var_dump(Box::$count);