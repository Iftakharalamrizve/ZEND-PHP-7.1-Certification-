<?php 


$array1 = array(   
    "price"=>10,
    "multi" => array(
        "price" => '4',
        "Background" => array(
         	"price" => '4',
             "option" => "transparen"            

         ),
         'Multipath' => array(
         	"price" => '4',
         ),
         'Neckjoint' => array(
         	"price" => '4',
         ),
         'Output Format' => array(
         	"price" => '4',
         	"option" => 'jpg'
         ),
         "Shadow/ Reflect" => array(
         	"price" => '4',
         	"option" => 'Original'
         )
    )
);

$count=0;
function callBack($item){
    global $count;
    $count++;
    echo $count;
    if($count==3){
        print_r($item);
        exit;
    }
    // print_r($item);
    if(is_array($item)){
        unset($item['price']);
        callBack($item);
    }
    // return $item;
    
}

if(array_key_exists('price',$array1)){
    unset($array1['price']);
}
$newArr=array_map('callBack',$array1);

print_r($newArr);