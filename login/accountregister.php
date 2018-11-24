<?php
  session_start();
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    echo "Welcome " . $f_name, ' ', $l_name;

      //creates active connection to db
      require('connect_db.php');

      //checks whether or not email and password have been inputted during registration
      if(isset($_POST['email']) && isset($_POST['password'])){
          $email = $_POST['email'];
          $password = $_POST['password'];

          //inserts newly registered user info into db
          $query = "INSERT INTO 'users' (f_name, l_name, email, password)
                    VALUES('$f_name', '$l_name', '$email', '$password')";
          $result = mysqli_query($query,$conn);
          if($result){
              echo 'You have registered successfully!';
          }
          else
              echo 'Oops somethings went wrong';
      }
?>
