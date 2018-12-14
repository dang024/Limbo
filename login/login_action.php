<?php
    require '../database/connect_db.php';
    //Escapes special characters in a string
    $userName = mysqli_real_escape_string($con, $_POST['firstname']);
    $password = mysqli_real_escape_string($con, $_POST['lastname']);
           //Runs query if user has successfully inputted username and password in login form
           if(isset($_POST['userName']) and isset($_POST['password']) ) {
               //Declares user input as post variables
               $userName = $_POST['userName'];
               $password = $_POST['password'];

               //Query that checks with database whether or not username and password combination exist
               $return = mysqli_query($con, "SELECT * FROM users WHERE username = '$userName' AND password = '$password' ") or die ("Could not execute query: " .mysqli_error($con));
               $row = mysqli_fetch_assoc($return);
               //Redirects user back to login page if login info is not found
               if(!$row) {
                 header("Location: login.php");
               }
           }
           //Performs query that determines Superadmin status
           $admin = mysqli_query($con, "SELECT user_id FROM users WHERE username = '$userName' AND password = '$password' ") or die ("Could not execute query: " .mysqli_error($con));
           $priv = mysqli_fetch_assoc($admin);
           $id = (int) $priv['user_id'];
           if($id == 1){
             session_start();
             $_SESSION['logged_in'] = 'YES';
             //Redirects to Superadmin page if relevant login info was inputted
             header('Location: ../superadmin/superadmin.php');
           }

           else{
             session_start();
             $_SESSION['logged_in'] = "YES";
             //Redirects to Admin page if relevant login info was inputted
             header('Location: ../admin/admin.php');
           }
    //Closes connection
    mysqli_close($con);
 ?>
