<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require '../database/connect_db.php';
    require 'login_tools.php';

    //Validate
    list($check, $data) =
      validate($con, $_POST['email'], $_POST['password']);

    if($check){
      session_start();

      $_SESSION['first_name'] = $data['first_name'];
      $_SESSION['last_name'] = $data['last_name'];

      load('account.php');
    }
    else {
      $errors = $data;
    }
    mysqli_close($con);
  }
  include('login.php');
 ?>
