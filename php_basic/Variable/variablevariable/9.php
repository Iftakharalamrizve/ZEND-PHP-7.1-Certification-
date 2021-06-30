<?php
class foo {
  function bar() {
    $bar1 = "var1";
    $bar2 = "var2";
    $this->{$bar1}= "this ";
    $this->{$bar2} = "works";
  }
}

$test = new foo;
$test->bar();
echo $test->var1 . $test->var2;
?>