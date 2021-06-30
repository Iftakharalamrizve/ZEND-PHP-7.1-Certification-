<?php 

$test = 50 ;
function &getNumWidgets()
{   
    global $test;
    return $test;
}

$newTestValue = &getNumWidgets();
$newTestValue--;
echo $test."\n";
echo $newTestValue;
