<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

$box = new Box();
$box->width = 10; 
$box->height = 10; 
$box->length = 10;
$volume = $box->volume();
var_dump($volume);
var_dump($box);