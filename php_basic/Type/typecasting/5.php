<?php 
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

function test_print($item2, $key,$prefix)
{
    echo "$key.$prefix: $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print','Fruits');