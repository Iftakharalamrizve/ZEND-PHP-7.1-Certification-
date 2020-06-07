<?php 
$array =['key1'=>'key1_value','key2'=>'key2_vlaue','key3'=>'key3_value','key4'=>'key4_value','key5'=>'key5_value'];
?>
<?php
    foreach ($array as $key => $value)
    {
        $key= $value;
    }

    $list = get_defined_vars();
    print_r($list);

    // echo $key5_value;

?>