<!DOCTYPE html>
<html>
 <head>
 <title>Found Items</title>
  <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
 </head>
 <body>
 <ul>
   <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
   <li><a href="../users/lost.php">Lost Items</a></li>
   <li><a href="../users/found.php">Found Items</a></li>
   <li><a href="../users/quicklinks.html">Quick Links</a></li>
   <li><a href="../users/FAQ.html">FAQ</a></li>
   <li style="float:right"><a class="active" href="../login/login.php">Admin Login</a></li>
 </ul>
 <?php
   if(isset($errors) && !empty($errors))
     {
       echo '<p id="err_msg">Oops! There was a problem:<br>';
       foreach ($errors as $msg)
       {
         echo " - $msg<br>";
       }
       echo 'Please try again or
             <a href="register.php">Register</a></p>';
     }
 ?>
<h1>Login</h1>
<form action="login_action.php" method="POST">
  <p>
  Email Address: <input type="text" name="email">
  </p><p>
  Password: <input type="password" name="password">
</p><p>
  <input type="submit" value="Login">
</p>
</form>

</body>



</html>
