<?php
  //if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require '../database/connect_db.php';

           if(isset($_POST['userName']) and isset($_POST['password']) ) {
               //Declares user input as post variables
               $userName = $_POST['userName'];
               $password = $_POST['password'];
               //Checks if username and password fields are empty or not
               if(empty($userName)){
                 echo 'Please enter a username.';
               }
               if(empty($password)){
                 echo 'Please enter a password.';
               }
               //Query that checks with database whether or not username and password combination exist
               $return = mysqli_query($con, "SELECT * FROM users WHERE username = '$userName' AND password = '$password' ") or die ("Could not execute query: " .mysqli_error($con));
               $row = mysqli_fetch_assoc($return);
               if(!$row) {
                 header("Location: login.php");
               }

//               if($return == TRUE){
                 //code here for redirection stuff
//                }

               else {
                     session_start();
                   $_SESSION['logged_in'] = "YES";
                   header('Location: ../admin/admin.php');

                }
           }

/*
           $ID = mysqli_query($con, "SELECT user_id FROM users WHERE username = '$userName' AND password = '$password'");
           $ID = $_SESSION['usertype']; //
           $usertype = '';

           if ($ID == 1){
             echo 'superadmin!';
           }

           else {
            $usertype = 'admin';
            }

          if ($usertype == 'superadmin'){
            header('Location: ../superadmin/superadmin.php');
            }

          if ($usertype == 'admin'){
            header('Location: ../admin/admin.php');
            }
*/
/*           $super = mysqli_query($con, "SELECT user_id FROM users WHERE username = '$userName' AND password = '$password'");
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
*/
    mysqli_close($con);
 ?>
