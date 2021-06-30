<?php
    
    $count = 0 ;

    for($i=0;$i<10;$i++){
        $i = &$count ;
    }

    echo $count;
?>