<?php
  //if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require '../database/connect_db.php';

           if(isset($_POST['userName']) and isset($_POST['password']) ) {
               $userName = $_POST['userName'];
               $password = $_POST['password'];
               if(empty($userName)){
                 echo 'Please enter a username.';
               }
               if(empty($password)){
                 echo 'Please enter a password.';
               }
               //Query that checks with database whether or not username and password combination exist
               $return = mysqli_query( $con, "SELECT * FROM users WHERE username = '$userName' AND password = '$password' ") or die("Could not execute query: " .mysqli_error($con));
               $row = mysqli_fetch_assoc($return);
               if(!$row) {
                 header("Location: login.php");
               }

               elseif ($row != NULL) {
                 header("Location: login.php");
               }

               else {
                     session_start();
                     $_SESSION['userName']=$userName;
               }
           }

           $super = mysqli_query($con, "SELECT user_id FROM users WHERE username = '$userName' AND password = '$password'");
           $thingy = mysqli_fetch_assoc($super);
           if($thingy == 1){
             $_SESSION['super_admin'] = $superadmin = TRUE;
           }

    if($superadmin == TRUE ){
      header('Location: ../superadmin/superadmin.php');
    }
    else {
      header('Location: ../admin/admin.php');
    }

    mysqli_close($con);
 ?>
