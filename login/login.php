<!-- HTML Login Form -->
<!-- Need to make it so that it reroutes admins and users to different home pages-->
<!-- Error message stuff and regex to check for valid email address input-->
<!--Include thingy with account.php perhaps?-->

<!DOCTYPE html>
<?php
  session_start();
  require '..\database\connect_db.php';
      //call from users table, figure out variable names
      //username and password stuff has to call from database
      //this is very important and will be variables perhaps
      //$username and $password

      if (isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == true){
        header("Location: account.php");
      }



  ?>

<html>
  <head>Login Page</head>
    <br/>
      <body>
        <!--stores email/password into $_POST-->
          <form method="POST" action="\account.php">
          Email: <input type="text" name="email">
          <br/>
          <br/>
          Password: <input type="password" name="password">
          <br/>
          <input type="submit" value="Login">
    <!--Encryption can be done using crypt() function-->
          </form>
      </body>
</html>
<!--I know that you have to have a query string that contains the SQL that you want to execute so you need an Insert statement that is filled dynamically
with the values you want to insert then I think there is some sort of function that let's
you execute it in the database. You also need another script I think that has the connection details for the database that you want to interact with
`query query_string = 'INSERT INTO blah VALUES blah' + variable1 +', ' + variable2'`-->
