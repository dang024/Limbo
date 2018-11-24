<?php
session_start();
$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
  echo "Welcome " . $f_name, ' ', $l_name;
?>
