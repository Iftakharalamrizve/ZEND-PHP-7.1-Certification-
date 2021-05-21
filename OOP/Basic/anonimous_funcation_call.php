<?php 

class A{
    public $vari;

    public function __construct()
    {
        $this->vari = function($item){
            echo $item ;
        };
    }
}

//craete instance 
$obj = new A ;
($obj->vari)(1);