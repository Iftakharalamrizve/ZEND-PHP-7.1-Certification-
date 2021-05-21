<?php

class myclass {
    static function say_hello($param=null)
    {
        echo "Hello!\n";
        echo $param;
    }
}

$classname = "myclass";

call_user_func(array($classname, 'say_hello'),"Bangladesh");
call_user_func($classname .'::say_hello',"Bangladesh"); // As of 5.2.3

$myobject = new myclass();

call_user_func(array($myobject, 'say_hello'),"Bangladesh");

?>