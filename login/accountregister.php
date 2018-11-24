<?php
  session_start();
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    echo "Welcome " . $f_name, ' ', $l_name;


      require('connect_db.php');
      if(isset($_POST['email']) && isset($_POST['password'])){
          $email = $_POST['email'];
          $password = $_POST['password'];

          //users is name of the db
          $query = "INSERT INTO 'users' (email, password) VALUES('$email', '$password')";
          $result = mysqli_query($query,$conn);
          if($result){
              $msg = "Registered Successfully";
          }
          else
              $msg = 'Oops somethings went wrong';
      }

?>
