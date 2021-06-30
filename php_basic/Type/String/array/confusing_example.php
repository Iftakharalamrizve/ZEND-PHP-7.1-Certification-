<?php 
$colors = array('red', 'blue', 'green', 'yellow');
foreach ($colors as &$color) {
   $color = strtoupper($color);
   echo "Do you like $color?\n";
}

print_r($colors);