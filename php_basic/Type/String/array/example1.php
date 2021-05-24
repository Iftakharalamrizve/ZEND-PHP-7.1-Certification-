<?php
$a = array(1 => 'one', 2 => 'two', 'test'=>6,3 => 'three');
unset($a[2]);
/* will produce an array that would have been defined as
   $a = array(1 => 'one', 3 => 'three');
   and NOT
   $a = array(1 => 'one', 2 =>'three');
*/

$b = array_values($a);
var_dump($b);
?>