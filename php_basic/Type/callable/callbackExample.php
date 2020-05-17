<?php 

// An example callback function
function my_callback_function() {
    echo 'hello world!';
}

// An example callback method
class MyClass {
    static function myCallbackMethod() {
        echo 'Hello World!';
    }
}

class TestClass extends MyClass{
    // static function myCallbackMethod()
    // {
    //     echo "Child class";
    // }
}

$testClassObject= new TestClass;
// Type 1: Simple callback
// call_user_func(array('MyClass', 'myCallbackMethod'));
call_user_func([$testClassObject,'myCallbackMethod']);
