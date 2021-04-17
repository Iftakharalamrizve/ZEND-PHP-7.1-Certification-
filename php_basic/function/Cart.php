<?php 

class Cart {

    const PRICE_PRODUCT1=5.6;
    const PRICE_PRODUCT2=6.8;
    const PRICE_PRODUCT3=2.6;

    public $prodcutStore=[];

    //declare function for added cart 
    function add($poductName,$quantitty){
        $this->prodcutStore[$poductName]=$quantitty;
    }

    function getTotalPrice($tax){
        $total=0;
         $callBack=function($quantitty,$productName) use ($tax,&$total){

                //access price constant value 
                $productPrice = constant(__CLASS__. '::PRICE_' .strtoupper($productName));
                $total += ($productPrice * $quantitty) * ($tax + 1.0);
         };

         array_walk($this->prodcutStore,$callBack);

         return round($total,2);
    }
    

}

//create object of class 
$cart = new Cart();

$cart->add('product1',1);
$cart->add('product2',5);
$cart->add('product3',10);

var_dump($cart->getTotalPrice(0.005));