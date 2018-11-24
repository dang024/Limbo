<!--Placeholder for what will eventually be the home page-->
<!--My guess is that it's going to use the PHP include function for like other links and stuff-->
<!--Login button somewhere on this page-->
<!DOCTYPE html>
<html>
  <body>
    <a href='logout.php'>Logout</a>
    <?php
    require 'connect_db.php';

    echo $LoggedIn + "World";
     ?>
  </body>
</html>
