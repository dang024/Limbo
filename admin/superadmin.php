<!DOCTYPE html>
<html>
  <body>
      <?php
        //Query that changes password of users
        mysqli_query($con, "UPDATE 'users' SET 'password' = '0' WHERE 'users.email' = $email");

        //Query that changes admin privilege of users
        mysqli_query($con, "UPDATE 'users' SET 'AdminPriv' = '0' WHERE 'users.email' = $email");
      ?>
  </body>
</html>
