<?php
function narcissistic($value)
{
    $numberArray = str_split($value);
    $characterLength = strlen($value);
    $sum = 0;

    foreach ($numberArray as $number) {
        $sum += pow($number, $characterLength);
    }

    return ($value == $sum);
}

var_dump(narcissistic(1634)); // return true;
var_dump(narcissistic(16341)); // return false;