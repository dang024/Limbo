<!-- HTML Login Form -->
<!-- Need to make it so that it reroutes admins and users to different home pages-->
<!-- Error message stuff and regex to check for valid email address input-->
<!--Include thingy with account.php perhaps?-->
<!DOCTYPE html>
<html>
<head>Login Page</head>
      <body>
          <form method="POST" action="login.php">
          Email: <input type="text" name="email"><br/>
          Password: <input type="password" name="password"><br/>
          <input type="submit" value="Login">
          </form>
      </body>
</html>
