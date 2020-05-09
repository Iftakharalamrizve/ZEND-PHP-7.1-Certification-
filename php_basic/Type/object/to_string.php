<?php 

class FirstClass{

    private $name;
    public $role;
    public function __construct($parm){
        $this->name=$parm;
    }

    public function getSimpleCopy(){
        // return (array)$this;
        return (object)(array)$this;
    }

    
}

//create object instance 

$objectInstance = new FirstClass("Iftakhar Alam Rizve");
// var_dump($objectInstance);
$instance=$objectInstance->getSimpleCopy();
$instance->name='Hello';
var_dump($instance->name);
