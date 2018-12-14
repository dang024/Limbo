<?php
  session_start();
  echo "Logged out Successfully";
  session_destroy(); // obliterates session out of existence
  mysqli_close($con);
  header("Location: Login.php");
?>
