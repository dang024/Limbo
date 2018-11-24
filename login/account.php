<!--Checks whether or not user has already registered-->
<!--Login form redirects to this page-->
<?php
  session_start();
  require('connect_db.php');

    if (!isset($_SESSION)['LoggedIn']) || $_SESSION)['LoggedIn'] == false){
      header("Location: login.php")
    }

//Needs a query that checks whether account exists or not, also to display first + last name from database
  $email = $_POST["email"];
    echo "Hello " . $email;

?>
