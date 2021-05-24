<?php
    class Test  {
        public $objTest = [] ;
        public function __construct(){
            $instanceClass = new class{};
            $instanceClass->name = "Iftakhar Alam Rizve";
            $this->objTest[3] = $instanceClass;
        }
    }

    $obj = new Test;
    echo $obj->objTest[3]->name;
?>