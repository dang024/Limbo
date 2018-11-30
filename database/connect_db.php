<?php
    $con = mysqli_connect("localhost", "root", '', "site_db");

      // Checks connection
      if (!$con)
      {
        echo "Oopsie Daisy!";
        echo "Debugging errno: " . mysqli_connect_errno();
        echo "Debugging error: " . mysqli_connect_error();
        exit;
      }
      //For testing connection to database
      /*  else
          echo 'Connection successful!';*/
?>
