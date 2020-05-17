<?php
function magic($p, $q)
{  
     return ($q == 0)    ? $p    : magic($q, $p % $q);
}

var_dump(magic(5,5));
?>