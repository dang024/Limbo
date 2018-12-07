<?php
  session_start();
  //creates active connection to db
  require '../database/connect_db.php';
    //Defines post variables to later be used in the query which inserts account info
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    echo "Welcome " . $f_name, ' ', $l_name;
    //checks whether entered passwords are the same
    if ($_POST["password"] != $_POST["c_password"]){
     echo "Passwords do not match, please try again";
   }
      //Defines post variables to later be used in the query which inserts account info
      if(isset($_POST['userName']) && isset($_POST['password'])){
          $userName = $_POST['userName'];
          $password = $_POST['password'];
        }

        //Query which inserts adds account information into the database
        mysqli_query($con, "SELECT * FROM users");
        mysqli_query($con, "INSERT INTO users (userName, password, first_name, last_name, admin_email)
                            VALUES('$userName', '$password', '$f_name', '$l_name', '$email')");
?>
