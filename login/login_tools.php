<?php
require '../database/connect_db.php';

//Loads login.php
function load($page = 'login.php')
{
  $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
  $url = rtrim($url, '/\\');
  $url .= '/' . $page;

  header("Location: $url");
  exit();
}

//Checks for db connection, whether or not userName+password field are empty
function validate($con, $userName , $pwd)
{

    $errors = array();

      //Displays error message when userName field is left empty
      if(empty($userName))
      {$errors[] = 'Please enter your username.';}
      else {
        {$e = mysqli_real_escape_string($con, trim($userName));}
      }

      //Displays error message when userName field is left empty
      if(empty($pwd))
      {$errors[] = 'Please enter your password.';}
      else {
        {$p = mysqli_real_escape_string($con, trim($pwd));}
      }

      //Displays first and last name if login was successful
      if(empty($errors))
      {
        $q = "SELECT first_name, last_name
              FROM users
              WHERE userName = '$e'
              AND password = '$p'";

        $r = mysqli_query($con, $q);

        if(!is_null($r))
        {
          $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
          return array(true, $row);
        }
        else
          $errors[] = 'Login information not found.';

      }

      //Returns list of error messages if login attempt fails
      return array(false, $errors);
}
?>
