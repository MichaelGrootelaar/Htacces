<?php
  require_once('class/test.php');
  
  call_user_func(array($_GET['class'], $_GET['action']));
?>
