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
        <!--HTML form which stores email/password into $_POST-->
          <form method="POST" action="account.php">
          Email: <input type="text" name="email">
          <br/>
          <br/>
          Password: <input type="password" name="password">
          <br/>
          <input type="submit" value="Login">
          </form>

            <?php  session_start();
              $email = $password = "";
              require '..\database\connect_db.php';


//Checks if user login credentials are accurate
              if(isset($_POST['email']) & isset($_POST['password'])){
                  $email = $_POST['email'];
                  $password = $_POST['password'];

                  $help = validate(email, password);

                  if($help > -1){


                    $ifemail = "SELECT COUNT(*) FROM user_t WHERE email LIKE '%$email'";

                    $ifpass = "SELECT COUNT(*) FROM user_t WHERE password LIKE '%$password'";

                    $emailresult = mysqli_query($con, $ifemail);

                    $passresult = mysqli_query($con, $ifpass);

                    if($emailresult & $passresult)
                            header("Location: account.php");
                      }
                  else{
                      echo 'Please enter a valid email and password';
                  }
                }


              if($emailresult & $passresult)
              {
                $ifAdminPriv =  "SELECT COUNT(*) FROM user_t WHERE AdminPriv = 0"
                    if($ifAdminPriv == 0)
                    {
                      header("Location: account.php");
                    }
                    else if ($ifAdminPriv == 1)
                    {
                      header("Location: admin.php");
                    }
              }

              if (isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn']){
                $email = $_POST['email'];
                $password = $_POST['password'];
                header("Location: account.php");
              }
          else{
              echo 'Please enter valid credentials';
          }

                  ?>
    </body>
      </body>
</html>
