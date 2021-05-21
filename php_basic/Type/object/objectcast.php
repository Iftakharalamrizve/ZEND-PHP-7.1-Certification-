<?php 

// class TestClass{

//     public function foo()
//     {
//         echo "Hello";
//     }
// }

// $array = [1,2,3,4,6];
// //casting object from arry 
// $objactCast = (object)$array;
// var_dump(key($objactCast));

// $scallerTypeData = " Name IFtakhar alam ";
// $objactCast = (object)$scallerTypeData;

// var_dump($objactCast->scalar);

// $num = array("Garha","sitamarhi","canada","patna"); //create an array
// $obj = (object)$num; //change array to stdClass object

// echo "<pre>";
// print_r($obj); //stdClass Object created by casting of array

// $newobj = new stdClass();//create a new
// $newobj->name = "India";
// $newobj->work = "Development";
// $newobj->address="patna";

// $new = (array)$newobj;//convert stdClass to array
// echo "<pre>";
// print_r($new); //print new object

// $test = ['Details'=>['name','roll number','college','mobile'],'values'=>['Naman Kumar','100790310868','Pune college','9988707202']];
// print_r(json_decode(json_encode($test),true));

// $literalObjectDeclared = (object) array(
//      'foo' => (object) array(
//           'bar' => 'baz',
//           'pax' => 'vax'
//       ),
//       'moo' => 'ui'
//    );
// print_r($literalObjectDeclared->foo->bar);


$x = (object) array('a'=>'A', 'b'=>'B', 'C');
echo '<pre>'.print_r($x, true).'</pre>';

echo $x->{0}
?>