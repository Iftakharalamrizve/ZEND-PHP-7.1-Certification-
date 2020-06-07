<?php
class pp{
   var $prop1=1,$prop2=2,$prop3=array(3,4,5);

   function fun1(){
      $vars=get_class_vars('pp');
      while(list($var,$value)=each($vars)){
               $ref=& $this->$var;
               $ref=$_GET[$var];

      } // while
      var_dump($this);
   }
}

$_GET['prop1']="uno";
$_GET['prop2']="dos";
$_GET['prop3']=array('tres','cuatro','cinco','seis');

$p=new pp();
$p->fun1();
?>