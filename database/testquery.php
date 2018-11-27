<!DOCTYPE html>
<html>
<body>
<?php
session_start();

require 'C:\Users\danny\Desktop\Limbo\database\connect_db.php';

  $sql = "SELECT user_id, email FROM users";
  $mysqli_result = mysqli_query($con,$sql);

  //Function for making sure results are returned from db query, maybe else statement to say nothing was found
  if (!$result = NULL) {
      echo "<table><tr><th>user_id</th><th>email</th></tr>";
      // output data of each row
      while($row = mysqli_fetch_assoc($mysqli_result)) {
          echo "<tr><td>".$row["user_id"]."</td><td>".$row["email"]."</td></tr>";
      }
      echo "</table>";
  }
/*
  $sql = "SHOW COLUMNS FROM users";

  while($row = mysqli_fetch_array($result)){
      echo $row['Field']."<br>";
  }

  $query = "SELECT user_id FROM users (f_name, l_name, email, password)
            VALUES('$f_name', '$l_name', '$email', '$password')";
  $result = mysqli_query($query,$con);
  if($result){
      echo 'You have registered successfully!';
  }
*/

 ?>
</body>
</html>
