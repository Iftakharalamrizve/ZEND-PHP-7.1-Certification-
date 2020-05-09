<?php 

class MyFunction{

    //callback method 
    private function sayHi(){
        echo "Hi........";
    }

    //callable function 
    public function testAccess(){
        $this->privateCallbackTest([$this,'sayHi']);
    }

    public  function testFunction(callable  $callBack)
    {
        $callBack();
    }


    private function privateCallbackTest(callable $callBack)
    {
        $callBack();
    }
}

//callable function create 

function sayHi()
{
    echo  "Hi ....";
}

//object instance create for this calss 

$objectInstance = new MyFunction();

$objectInstance->testAccess();
//if public method this is work just fine 
$objectInstance->testFunction('sayHi');


//if private and protected method use callback then follow this rule  in class 