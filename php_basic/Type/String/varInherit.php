<?php 
error_reporting(0);

class foo {
    var $quux = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
// echo "{$foo->$bar}\n";
// echo "{$foo->{$baz[1]}}\n";
foreach($baz as $key=>$item){
    if($foo->{$baz[$key]}){
        echo "{$foo->{$baz[$key]}}\n";
    }
}

?>
