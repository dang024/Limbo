<?php
  //if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require '../database/connect_db.php';

           if(isset($_POST['userName']) and isset($_POST['password']) ) {
               //Declares user input as post variables
               $userName = $_POST['userName'];
               $password = $_POST['password'];



               //Query that checks with database whether or not username and password combination exist
               $return = mysqli_query($con, "SELECT * FROM users WHERE username = '$userName' AND password = '$password' ") or die ("Could not execute query: " .mysqli_error($con));
               $row = mysqli_fetch_assoc($return);
               if(!$row) {
                 header("Location: login.php");
               }


           }

           $admin = mysqli_query($con, "SELECT user_id FROM users WHERE username = '$userName' AND password = '$password' ") or die ("Could not execute query: " .mysqli_error($con));
           $priv = mysqli_fetch_assoc($admin);
           $id = (int) $priv['user_id'];


           if($id == 1){
             session_start();
             $_SESSION['logged_in'] = "YES";
             header('Location: ../superadmin/superadmin.php');
           }

           else{
             session_start();
             $_SESSION['logged_in'] = "YES";
             header('Location: ../admin/admin.php');
           }

    mysqli_close($con);
 ?>
