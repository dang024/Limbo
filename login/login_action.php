<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require '../database/connect_db.php';
    require 'login_tools.php';

    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $check = mysqli_query($con, "SELECT '$userName','$password' FROM users");
    //Validate
    //list($check, $data) =
    //  validate($con, $_POST['userName'], $_POST['password']);
    function authorize($userName, $password)
    {
    // Notice the use of sha1 on the passwords, make sure you store your passwords with sha1 (avoid MD5)
    return ($username == 'username' & $password == 'password') ? 0 : -1;
    }
    // If the login form has been entered
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check the user's credentials
    $pid = authorize($_POST['username'], $_POST['password']);
    if ($pid == -1) {
        // If the user is not authorized, then show them a message saying they aren't allowed to be there
        echo '<P style=color:red>Login failed please try again.</P>';
    } else {
        // If user _is_ authorized, set a session variable saying they are logged in, set the header, then load the page
        session_start();
        $_SESSION['logged_in'] = 'YES';
        header("location: authorized_page.php");
        load('authorized_page.php', $pid);
    }
}
/*    if($check){
      session_start();
      $_SESSION['first_name'] = $data['first_name'];
      $_SESSION['last_name'] = $data['last_name'];
      $_SESSION['logged_in'] = true;
    }
    else {
      $errors = $data;
    }
*/
    $role = mysqli_query($con, "SELECT user_id FROM users WHERE userName = $userName");
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
