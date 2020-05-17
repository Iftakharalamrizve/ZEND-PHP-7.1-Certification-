<?php

class mc {
   public function go(array $arr) {
       array_walk($arr, array($this, "walkIt"));
   }

   private function walkIt($val) {
       echo $val . "<br />";
   }

    public function export() {
        call_user_func_array([$this,'walkIt'],[1,2,3]);
    }
}

$data = array(1,2,3,4);

$m = new mc;
// $m->go($data); // valid

$array=array_walk($data, [$m,'export']);

?>