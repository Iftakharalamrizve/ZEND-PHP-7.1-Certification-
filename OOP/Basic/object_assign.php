<?php
class A{}
$instance = new A();
//assigned object instance in one variable 
$assignedValue = $instance ;
$refInstance = & $instance ;
$instance->name ="Iftakhar";
var_dump($instance);
var_dump($assignedValue);
var_dump($refInstance);
$instance = null ;

var_dump($instance);
var_dump($assignedValue);
var_dump($refInstance);

?>