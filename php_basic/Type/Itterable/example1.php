<?php 

class Foo {
    public $a = 1;
    public $b = "Helo";

};

$bar = new Foo;

function firstFunction(iterable  $values):iterable
{
    global $bar ;

    foreach($values as $item){
        echo "$item\n";
    }
    return (array)$bar;
}


firstFunction([1,3,4,5,6,7]);

// <?php



// foreach($bar as $elm) {
//     echo $elm . ' ';
// }

// ?>