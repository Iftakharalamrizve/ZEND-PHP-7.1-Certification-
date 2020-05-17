<?php 

class TestClass {

    private $priv12 = 'priv_value';
    private $priv1w3243242 = 'priv_value';
    protected $prot = 'prot_value';
    protected $prot435 = 'prot_value';
    public $pub = 'pub_value';
    public $priv1234 = 'second_pub_value';

}
//create object 

$test = new TestClass();
echo '<pre>';
$testArray=(array) $test;
foreach ($testArray as $key => $value) {
    $len = strlen($key);
    echo "{$key} ({$len}) => {$value}<br />";
    for ($i = 0; $i < $len; ++$i) {
        echo ord($key[$i]) . ' ';
    }
    echo '<hr />';
}