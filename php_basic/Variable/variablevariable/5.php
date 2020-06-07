<?php
$tab = array("one", "two", "three") ;
$a = "tab" ;
$$a['test'] ="four" ; // <==== fatal error
print_r($tab) ;
?>