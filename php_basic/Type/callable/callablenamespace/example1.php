<?php 
    namespace Foo;
    function testCallback($value){
        echo $value;
    }

    $arr=[1,2,3,4,5,6,7];
    // array_map('Foo\testCallback',$arr);

?>
