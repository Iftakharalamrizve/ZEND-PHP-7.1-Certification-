<?php

$variable =[1,2,3];
$parameterHereDoc = [<<<"START"
Hello Bangalldesh
I love you {$variable[0]}
START
];

print_r($parameterHereDoc);