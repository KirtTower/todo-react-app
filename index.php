<?php

$obj = new stdClass();
$obj->name = 'Kaspar';
$obj->nage = 30; 
var_dump($obj);

function hello() {
    echo "hello world";
}
hello();

function sum($a, $b) {
    return $a+$b;
}
$answer = sum(1,2);
var_dump($answer);
var_dump(sum(3,5));