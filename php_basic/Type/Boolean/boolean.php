<?php 


function removeItemElement( $value ,  $array )
{
    $index=array_search ( $value , $array ) ;//array serarch return index if found or return false if value not found 
    //unset index if index found in array this value unset but if array search return false this index make 0 for this reason unset the o item from array
    unset($array[$index]);
    return $array;

}

// this will remove element 'A'
$array = ['A', 'B', 'C'];
$array = removeItemElement('A', $array);

var_dump($array);

//but any non-existent element will also remove 'A'!
$array = ['A', 'B', 'C'];
$array = removeItemElement('X', $array);

var_dump($array);


$status = (!!$array ? 'complete' : 'incomplete');
echo $status;


