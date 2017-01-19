<?php
  require_once('class/test.php');

  function test($string) {
    $array = explode("/", $string);
    array_splice($array, 0, 1);

    call_user_func($array);
  }

  test($_SERVER['PATH_INFO']);

?>
