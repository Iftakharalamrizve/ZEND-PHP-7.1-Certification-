<?php 

//define closure function 

$closure = function($a) {
    return $a * 2;
};

//array make 

$arrayInfo = range(1,5);


//callback function use 

$newArr=$arrayInfo->map($closure,$arrayInfo);
