<?php 

    function remove_element($el,$arr)
    {
        $findIndex = array_search($el,$arr);
        if($findIndex !== FALSE){
            unset($arr[$findIndex]);
        }
        return $arr ;
    }

    $arr = ['A','B','C'];

    $newArray = remove_element('X',$arr);

    print_r($newArray);

   // https://www.php.net/manual/en/language.types.boolean.php 3 Mark Simon ¶