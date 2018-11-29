<!-- HTML Login Form -->
<!-- Need to make it so that it reroutes admins and users to different home pages-->
<!-- Error message stuff and regex to check for valid email address input-->
<!--Include thingy with account.php perhaps?-->

<!DOCTYPE html>
<html>

<head>
<title>Login</title>
 <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
</head>

<body>

<ul>
  <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a href="../users/lost.php">Lost Items</a></li>
  <li><a href="../users/found.php">Found Items</a></li>
 <li><a href="../users/quicklinks.html">Quick Links</a></li>
  <li><a href="../users/FAQ.html">FAQ</a></li>
  <li style="float:right"><a  class="active" href="../login/login.php">Login</a></li>
</ul>


    <br/>
      <body>
        <!--stores email/password into $_POST-->
          <form method="POST" action="account.php">
          Email: <input type="text" name="email">
          <br/>
          <br/>
          Password: <input type="password" name="password">
          <br/>
          <input type="submit" value="Login">
    <!--Encryption can be done using crypt() function-->
          </form>

            <?php  session_start();
              $email = $password = "";
              require '..\database\connect_db.php';
          
              if(isset($_POST['email']) & isset($_POST['password'])){
                  $ifemail = "SELECT COUNT(*) FROM user_t WHERE email LIKE '%$email'";
                  
                  $ifpass = "SELECT COUNT(*) FROM user_t WHERE password LIKE '%$password'"
                  
                  $emailresult = mysqli_query($con, $ifemail);
                  
                  $passresult = mysqli_query($con, $ifpass);
                  
                  if($emailresult & $passresult)
                        header("Location: account.php");
              }
              //call from users table, figure out variable names
              //username and password stuff has to call from database
              //this is very important and will be variables perhaps
              //$username and $password

              if (isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn']){
                $email = $_POST['email'];
                $password = $_POST['password'];
                header("Location: account.php");
              }
          else{
              echo 'u suck';
          }




//                if(isset($email, $password) == true){
//                    $_SESSION['LoggedIn'] == true;
//                    header("Location: account.php");
//                  }
                  ?>
      </body>
</html>
<!--I know that you have to have a query string that contains the SQL that you want to execute so you need an Insert statement that is filled dynamically
with the values you want to insert then I think there is some sort of function that let's
you execute it in the database. You also need another script I think that has the connection details for the database that you want to interact with
`query query_string = 'INSERT INTO blah VALUES blah' + variable1 +', ' + variable2'`-->
