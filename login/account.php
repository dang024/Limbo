<!--Checks whether or not user has already registered-->
<!--Login form redirects to this page-->
<?php
  session_start();
    if (!isset($_SESSION)['logged_in']) || $_SESSION)['logged_in'] == false){
      header("Location: login.php")
    }
    
  $email = $_POST["email"];
    echo "Hello " . $email;

  $password = $_POST["password"];
    echo "Your password is: " . $email;


?>
