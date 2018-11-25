<!--Script to connect to site_db locally-->

<!DOCTYPE html>
<html>
  <body>
<?php
  session_start();
    $con = mysqli_connect("localhost", "root", '', "site_db");

      // Checks connection
      if (!$con)
      {
        echo "Oopsie Daisy!";//THis needs to be edited pls
        echo "Debugging errno: " . mysqli_connect_errno();
        echo "Debugging error: " . mysqli_connect_error();
        exit;
      }
    echo "Connection with site_db established.";
?>
  </body>
</html>
