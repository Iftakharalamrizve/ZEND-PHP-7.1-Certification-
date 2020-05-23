<?php 
function fn1() {
    $varible = "something";
 
   return $varible;
 }
 

 $newvariable = fn1;

 echo $newvariable();