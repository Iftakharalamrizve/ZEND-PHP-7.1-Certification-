<?php 
 class A{
     public function foo()
     {
         echo "Foo metod create";
     }

     public static function bar()
     {
         $obj = new self();
         self::foo();
     }
 }

 $object = new A ;
$object->bar();