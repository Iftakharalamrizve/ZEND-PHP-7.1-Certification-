<?php
class Foo {
    public static function doAwesomeThings() {
        FunctionCaller::callIt('static::someAwesomeMethod');
    }

    public static function someAwesomeMethod() {
        echo __CLASS__;
    }
}

class FunctionCaller extends Foo {
    public static function callIt(callable $func) {
        call_user_func($func);
    }

}

Foo::doAwesomeThings();
?>