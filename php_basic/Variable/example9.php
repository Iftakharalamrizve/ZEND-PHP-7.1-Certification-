<?php 
class sample_class
{
  public function func_having_static_var($x = NULL)
  {
      echo $x===NULL;
    static $var = 0;
    if ($x === NULL)
    { return $var; }
    $var = $x;
  }
}

$a = new sample_class();
$b = new sample_class();

echo $a->func_having_static_var()."\n";
echo $b->func_having_static_var()."\n";
// this will output (as expected):
?>