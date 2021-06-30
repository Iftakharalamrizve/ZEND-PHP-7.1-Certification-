<?php 
$double = function($a) {
    return $a * 2;
};
$numbers = range(1, 5);
$new_numbers = array_map($double, $numbers);

$newStr = implode(',', $new_numbers);
$newStrArr = explode(",",$newStr);
print_r($newStrArr);
