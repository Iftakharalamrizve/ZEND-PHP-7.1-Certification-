<?php 

function test (){
    global $a;

    $obj = 10;

    $a = $obj;
}

test();
var_dump($a);
