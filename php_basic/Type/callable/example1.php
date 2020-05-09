<?php 

class MyFunction{

    private function testFunction(callable  $callBack)
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

//if public method this is work just fine 
$objectInstance->testFunction('sayHi');
