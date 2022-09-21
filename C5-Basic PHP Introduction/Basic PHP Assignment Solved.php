<?php

function piCircle(){
    return 3.14;
}

function areaOfCircle(int $num_){
    $radius = $num_ / 3;
    return piCircle() * $radius * $radius;
}

function perimeterOfCircle(int $num_){
    $radius = $num_ / 5;
    return piCircle() * 2 * $radius;
}

function areaOfRectangle(int $num_){
    $length = $num_ / 3;
    $width = $num_ / 5;
    return $length * $width;
}

function getNumber(int $num_){
    if ($num_ % 3 == 0 && $num_ % 5 == 0){
        return areaOfRectangle($num_);
    }
    else if ($num_ % 3 == 0){
        return areaOfCircle($num_);
    }
    else if ($num_ % 5 == 0){
        return perimeterOfCircle($num_);
    }
    return $num_;
}

for ($i = 1; $i <= 100; $i++){
    $number = getNumber($i);
    $formattedNumber = number_format($number, 2, '.', '');
    echo $formattedNumber . "\n";
}

?>
