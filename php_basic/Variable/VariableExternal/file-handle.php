<?php 
   setcookie("{$_POST['name']}",'name', time()+3600);
   setcookie("{$_POST['email']}", 'email', time()+3600);
?>