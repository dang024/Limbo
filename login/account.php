<!--Checks whether or not user has already registered-->
<!--Login form redirects to this page-->
<?php
  session_start();
  $email = $_POST["email"];
    echo "Hello " . $email;

  $password = $_POST["password"];
    echo "Your password is: " . $email;
?>
