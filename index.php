<?php

$num = 9;
if($num > 10){
    var_dump('suurem');
} else if ($num === 10) {
    var_dump('vordne');
} else {
    var_dump('vaiksem');
}

if($num === 1) {
    echo 'üks';
}
if($num === 2) {
    echo 'kaks';
}
if($num === 3) {
    echo 'kolm';
}
if($num === 4) {
    echo 'neli';
}

// selle ülemise asemele kirjutame hoopis ...

switch($num) {
    case 1:
        echo 'üks';
        break;
    case 2:
        echo 'kaks';
        break;
    default: // kui pole ükski variantidest 
        echo 'midagi muud';
        break;
} 

for ($i=0; $i<10; $i++){
    var_dump($i);
}

$array = [1, 2, 3, 4];

foreach ($array as $value){
    var_dump($value);
}

foreach ($array as $key=>$value){
    var_dump($key . ':' . $value);
}