<?php

$message="No Way";

class ABC{
    
    public $data1 =<<<PH
        Public property
PH;
    static $data2 =<<<SH
        Static property
SH;
    const data3 =<<<CH
            
        Constatn property
CH;
        
        public function ABC1()
        {
            echo $this->data1;
            echo self::$data2;
            echo self::data3;
        
        }
}

$obj = new ABC();
$obj->ABC1();

?>