<?php 

class A{

    public $test = " Iftakhar alam ";
    public  function foo()
    {
        if(isset($this)){
            echo 'This is defined and class name (';
            echo get_class($this).')';
        }else{
            // echo"This is not defined {$this->test}";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$obj = new A ;
// $obj->foo() ;
$b = new B();
$b->bar();