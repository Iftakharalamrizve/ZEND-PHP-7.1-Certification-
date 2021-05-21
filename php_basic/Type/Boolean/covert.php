<?php
    class Test  {
        public $objTest ;
        public function __construct(){
            $instanceClass = new class{};
            $instanceClass->name = "Iftakhar Alam Rizve";
            $this->objTest = $instanceClass;
        }
    }

    $obj = new Test;
    echo $obj->objTest->name;
    // echo "Hello Bangladesh {$obj->testArray["first"]["second"][0]->name}";
?>
