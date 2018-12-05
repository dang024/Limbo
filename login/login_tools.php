<?php
//Loads login.php
function load($page = 'login.php')
{
  $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
  $url = rtrim($url, '/\\');
  $url .= '/' . $page;

  header("Location: $url");
  exit();
}

//Checks for db connection, whether or not email+password field are empty
function validate($con, $email , $pwd)
{

    $errors = array();

      //Displays error message when email field is left empty
      if(empty($email))
      {$errors[] = 'Enter your email address.';}
      else {
        {$e = mysqli_real_escape_string($con, trim($email));}
      }

      //Displays error message when email field is left empty
      if(empty($pwd))
      {$errors[] = 'Enter your password.';}
      else {
        {$p = mysqli_real_escape_string($con, trim($pwd));}
      }

      //Displays first and last name if login was successful
      if(empty($errors))
      {
        $q = "SELECT first_name, last_name
              FROM users
              WHERE email = '$e'
              AND pass = '$p'";

        $r = mysqli_query($con, $q);

        if($r->num_rows) == 1)
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
