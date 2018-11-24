<!--This could go on the corner of all pages maybe-->
<?php
  session_start();
  echo "Logged out Successfully";
  session_destroy(); // obliterates session out of existence
  header("Location: Login.php");
?>
