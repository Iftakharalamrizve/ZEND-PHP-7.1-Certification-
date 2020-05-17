<?php 

class MyFunction{

    //callback method 
    private function sayHi(){
        echo "Hi........";
    }

    //callable function 
    static function testAccess(){
        self::testStaticFunction([__CLASS__,'sayHi']);
    }

    public  function testFunction(callable  $callBack)
    {
        $callBack();
    }


    private function privateCallbackTest(callable $callBack)
    {
        $callBack();
    }

    //create a static methdo for test callback example
    static function testStaticFunction(callable $callBack)
    {
        $callBack();
    }
}

//callable function create 

function sayHi()
{
    echo  "Hi ....";
}

MyFunction::testAccess();