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
 session_start();
 require '../database/connect_db.php';
 require 'login_tools.php';
/*
 function authorize($username, $password)
{
    // Notice the use of sha1 on the passwords, make sure you store your passwords with sha1 (avoid MD5)
    return ($username == 'userName' & sha1($password) == sha1('password')) ? 0 : -1;
}
// If the login form has been entered
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check the user's credentials
    $pid = authorize($_POST['userName'], $_POST['password']);
    if ($pid == -1) {
        // If the user is not authorized, then show them a message saying they aren't allowed to be there
        echo '<P style=color:red>Login failed please try again.</P>';
    } else {*/
        // If user _is_ authorized, set a session variable saying they are logged in, set the header, then load the page
/*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['userName']) and isset($_POST['password']) ) {
        		$userName = $_POST['userName'];
        		$password = $_POST['password'];

        		$return = mysqli_query( $con, "SELECT * FROM users WHERE username = '$userName' AND password = '$password' ") or die("Could not execute query: " .mysqli_error($con));
        		$row = mysqli_fetch_assoc($return);
        		if(!$row) {
        			header("Location: login.php");
        		}
        		else {
        	        session_start();
        	        $_SESSION['userName']=$userName;
        		}
        }
}
        $super = mysqli_query($con, "SELECT user_id FROM users WHERE username = '$userName' AND password = '$password'");
        $thingy = mysqli_fetch_assoc($super);
        if($thingy == 1){
          $_SESSION['super_admin'] = $superadmin = TRUE;
        }

*/
/*
        mysqli_query($con, "SELECT user_id FROM users WHERE userName = $userName");
        if user_id =
        header("location: authorized_page.php");
        load('authorized_page.php', $pid);
    }
}*/
?>
<!--   if(isset($errors) && !empty($errors))
     {
       echo '<p id="err_msg">Oops! There was a problem:<br>';
       foreach ($errors as $msg)
       {
         echo " - $msg<br>";
       }
       echo 'Login information not found.';
     }
 ?> -->
<h1>Login</h1>
<form action="login_action.php" method="POST">
  <p>
  Username: <input type="text" name="userName">
  </p><p>
  Password: <input type="password" name="password">
</p><p>
  <input type="submit" value="Login">
</p>
</form>

</body>



</html>
<!--function authorize($username, $password)
{
    // Notice the use of sha1 on the passwords, make sure you store your passwords with sha1 (avoid MD5)
    return ($username == 'username' & sha1($password) == sha1('password')) ? 0 : -1;
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
?>
