<?php
    echo false-true;$a=1;
    $b=2;
    function sum() {
        global $a, $b;
        $a += $b;
    }
    
    $t = microtime(false);
    print_r($t);
?>