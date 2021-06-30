<?php 
namespace NameSpaceTest\Transaction;
class Test{
    public $var ="Transaction";
}

$obj1 = new Test;
$obj2 = new \NameSpaceTest\Authentication\Test;
echo $obj2->var;