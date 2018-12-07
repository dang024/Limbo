<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require '../database/connect_db.php';
    require 'login_tools.php';

    //Validate
    list($check, $data) =
      validate($con, $_POST['userName'], $_POST['password']);

    if($check){
      session_start();

      $_SESSION['first_name'] = $data['first_name'];
      $_SESSION['last_name'] = $data['last_name'];
    }
    else {
      $errors = $data;
    }

    $role = mysqli_query($con, "SELECT user_id FROM users");
    if(user_id == 0){
      header(Location: "superadmin.php");
    }
    else {
      header(Location: "admin.php ")
    }
    
    mysqli_close($con);
  }
  //include('login.php');
 ?>
