<?php 

class TestClass 
{   
    public function testStaticOperation($x=NULL){
        static $var=0;
        if($x === NULL){
            return $var;
        }
        $var=$x;
    }
}
$obj = new TestClass();
//object method call 
echo $obj->testStaticOperation();
echo $obj->testStaticOperation(3);
echo $obj->testStaticOperation();
