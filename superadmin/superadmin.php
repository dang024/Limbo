<!--Function that will be used to create a new user account-->
<!--Has to check with users table-->
<!--Confirm password for registering-->
<!DOCTYPE html>
<html>

<head>
<title>Create an Account</title>
 <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
</head>

<body>

<ul>
  <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a href="../users/lost.php">Lost Items</a></li>
  <li><a href="../users/found.php">Found Items</a></li>
  <li><a href="../users/quicklinks.html">Quick Links</a></li>
  <li><a href="../users/FAQ.html">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Login</a></li>
        </ul>

        <p>Report a found item <a href="<?php echo '../users/found.php'; ?>">here.</a></p>

        <p>Report a lost item <a href="<?php echo '../users/lost.php'; ?>">here.</a></p>

        <p>Delete a found item entry <a href = "<?php echo 'founditem.php'; ?>">here.</a></p>

        <p>Delete a lost item entry <a href = "<?php echo 'lostitem.php'; ?>">here.</a></p>
        
        <h2>Add Admin.</h2>
        <p>Please fill out the fields below to add an admin account.</p>
        <form method="POST" action="accountregister.php">
        Username: <input type="text" name="userName">
        First name: <input type="text" name="f_name">
        Last name: <input type="text" name="l_name">
        Email: <input type="text" name="email">
        <br/>
        <br/>
        Password: <input type="password" name="password">
        <br/>
        Confirm password: <input type="password" name="c_password">
        <input type="submit" value="Register"></form>

<?php
session_start();
  //creates active connection to db
  require '../database/connect_db.php';
?>

</body>
</html>
