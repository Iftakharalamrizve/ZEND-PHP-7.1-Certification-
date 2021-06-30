<?php 

function refFunc(&$param)
{
    $param = 10 ;
    echo $param;
}
$var =6 ;
refFunc($var);