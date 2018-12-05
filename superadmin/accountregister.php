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

      if(isset($_POST['email']) && isset($_POST['password'])){
          $email = $_POST['email'];
          $password = $_POST['password'];
        }

        //confirm passwords if statement
         if ($_POST["password"] != $_POST["password"]){
          echo "Passwords do not match, please try again";
        }

        mysqli_query($con, "SELECT * FROM users");
        mysqli_query($con, "INSERT INTO users(f_name, l_name, email, password)
                            VALUES('$f_name', '$l_name', '$email', '$password')");
        mysqli_query($con, "UPDATE 'users' SET 'AdminPriv' = '0' WHERE 'users.email' = $email");
?>
