<?php
  session_start();
  require 'C:\Users\danny\Desktop\Limbo\database\connect_db.php';
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    echo "Welcome " . $f_name, ' ', $l_name;

      //creates active connection to db
      //Require makes rest of script fail if not successful

      //checks whether or not email and password have been inputted during registration
      if(isset($_POST['email']) && isset($_POST['password'])){
          $email = $_POST['email'];
          $password = $_POST['password'];

//HASH PASSWORD First
//beep boop
//hashing stuff here


        //confirm password if statement works in theory, not tested yet
        //find out whether this goes here or in register.php
         if ($_POST["password"] != $_POST["cpassword"]){
          echo "Passwords do not match, please try again";
        }

        mysqli_query($con, "SELECT * FROM users");
        mysqli_query($con, "INSERT INTO users(f_name, l_name, email, password)VALUES
        ('$f_name', '$l_name', '$email', '$password')");
?>
