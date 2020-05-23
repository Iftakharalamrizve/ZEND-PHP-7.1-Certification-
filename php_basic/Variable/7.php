<?php 
global $a;

$a=10;

function test (){
    $a=20;
    echo $GLOBALS['a'];
}

test();