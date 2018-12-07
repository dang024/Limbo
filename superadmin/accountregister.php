<?php
  session_start();
  //creates active connection to db
  require '../database/connect_db.php';
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    echo "Welcome " . $f_name, ' ', $l_name;

    if ($_POST["password"] != $_POST["password"]){
     echo "Passwords do not match, please try again";
      }

      if(isset($_POST['userName']) && isset($_POST['password'])){
          $userName = $_POST['userName'];
          $password = $_POST['password'];
        }

        //confirm passwords if statement
         if ($_POST["password"] != $_POST["c_password"]){
          echo "Passwords do not match, please try again";
        }

        mysqli_query($con, "SELECT * FROM users");
        mysqli_query($con, "INSERT INTO users (userName, password, first_name, last_name, admin_email)
                            VALUES('$userName', '$password', '$f_name', '$l_name', '$email')");
?>
