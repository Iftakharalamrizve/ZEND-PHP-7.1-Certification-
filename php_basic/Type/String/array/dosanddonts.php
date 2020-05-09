
<?php
$a1 = array( "a" => 0, "b" => 1 );
$a2 = array( "aa" => 00, "bb" => 11 );

$together = array( $a1, $a2 );

foreach($together as $Key=>$value){
    $together[$Key]['c']='c';
}

var_dump($together);