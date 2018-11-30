<!--Admin Home Page-->
<!--Make the admin login “admin” and “gaze11e” (those are ones, not the letter “ el’s”).-->
<!DOCTYPE html>
<?php session_start(); ?>
<html>
  <body>
    <?php
      require '..\database\connect_db.php';
      require '..\users\found.php';
      require '..\users\lost.php';

      //Query that changes password of users
      mysqli_query($con, "UPDATE 'users' SET 'password' = '0' WHERE 'users.email' = $email");

      //Query that changes admin privilege of users
      mysqli_query($con, "UPDATE 'users' SET 'AdminPriv' = '0' WHERE 'users.email' = $email");

      ?>
  </body>
</html
