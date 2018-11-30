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

        <h2>Create an Account!</h2>
        <p>Please fill out the fields below to create an account.</p>
        <form method="POST" action="accountregister.php">
        First name: <input type="text" name="f_name">
        Last name: <input type="text" name="l_name">
        Email: <input type="text" name="email">
        <br/>
        <br/>
        Password: <input type="password" name="password">
        <br/>
        Confirm password: <input type="password" name="cpassword">
        <input type="submit" value="Register">
        <p>Already have an account? <a href="login.php">Login here</a></p>
        </form>

<?php
session_start();
  //creates active connection to db
  require '..\database\connect_db.php';
    
    
    //echo "Welcome " . $f_name, ' ', $l_name;
/* need to fix the query b/c the user cannot directly put things in the database*/
  if (isset($_POST["f_name"]) & isset($_POST["l_name"]) & isset($_POST["email"]) & isset($_POST["password"])){
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $LostItem = "INSERT INTO users_t (f_name, l_name, email, password)
                  VALUES('$f_name', '$l_name', '$email', '$password')";
                  $result = mysqli_query($con, $NewUser);
                    if($result){
                        echo 'Great job! You made an account!';
                    }
                    else
                        echo 'Oops something\'s went wrong';
}
?>        
</body>
</html>
