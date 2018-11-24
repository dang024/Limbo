<?php
  session_start();

  echo "Logged out Successfully ";
  session_destroy();   // function that Destroys Session
  header("Location: Login.php");
?>
