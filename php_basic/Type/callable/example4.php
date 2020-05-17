<?php 
class Test {
    protected $items = array();

    public function __construct()
    {
        $this->items[] = array($this, 'callBackOne');
        $this->items[] = array($this, 'callBackTwo');
    }

    public function callBackOne()
    {
        echo __METHOD__ . ' has been called as a callback.';
    }

    public function callBackTwo()
    {
        echo __METHOD__ . ' has been called as a callback.';
    }   

    public function getItems()
    {
        return $this->items;
    }
}

//create object instance 
$obj = new Test();
$itemLists = $obj->getItems();
foreach ($itemLists as $itemList) {

    // call each one as a variable function
    print_r($itemList());
    echo "---------------------";
}