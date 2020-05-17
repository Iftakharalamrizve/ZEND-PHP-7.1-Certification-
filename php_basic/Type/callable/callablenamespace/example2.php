<?php 
    namespace Foo2;
    include('example1.php');
    

    $arr=[1,2,3,4,5,6,7];
    array_walk($arr,'Foo\testCallback');

?>
