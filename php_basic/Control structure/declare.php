<?php

function add_some_extra($callback,$array)
{
    
    return  $callback($array);
}
$test  = function($array){
    
    print_r(sort($array));
};

$cars = array("Volvo", "BMW", "Toyota");
 $test($cars);
 print_r($cars);

// echo add_some_extra($test,$cars);