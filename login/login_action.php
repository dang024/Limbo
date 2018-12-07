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
      $_SESSION['logged_in'] = true;
    }
    else {
      $errors = $data;
    }

    $role = mysqli_query($con, "SELECT user_id FROM users");
    if($role == 1){
      header('Location: ../superadmin/superadmin.php');
    }
    else {
      header('Location: ../admin/admin.php');
    }

    mysqli_close($con);
  }
  //include('login.php');
 ?>
