<?php
function load($page = 'login.php')
{
  $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
  $url = rtrim($url, '/\\');
  $url .= '/' . $page;

  header("Location: $url");
  exit();

  function validate($con, $email = ", $pwd = ")
  {
    $errors = array();
      if(empty($email))
      {$errors[] = 'Enter your email address.';}
      else {
        {$e = mysqli_real_escape_string($con, trim($email));}
      }

      if(empty($pwd))
      {$errors[] = 'Enter your password.';}

  }


}

?>
