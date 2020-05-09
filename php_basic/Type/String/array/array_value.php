<?php 

$array=[1,2,3,4,5,6];

//user array value 

function removeItem($array,$item)
{
    $index=array_search($item,$array);
    unset($array[$index]);

    return $array;
}

var_dump(array_values(removeItem($array,1)));