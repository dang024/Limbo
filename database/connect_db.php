<!--Connects to limbo.sql db-->
<!--<!DOCTYPE html>
<html>
  <body>
     none of this works yet, just pretty much the logic behind connecting to db-->
    <?php
      $Host = "myDomainName.com"; // use your real host name
      $email = "myUserName";   // use your real login user name
      $password = "myPassword";   // use your real login password
      $dbname = "myDataBaseName"; // use your real database name
      $con = mysqli_connect( "$myHost", "$myUserName", "$myPassword", "$myDataBaseName" );

        if( !$con ) // == null if creation of connection object failed
          {
            die("connection object not created: ".mysqli_error($con));
          }

        if( mysqli_connect_errno() )  // returns false if no error occurred
          { //reports error to user, exits
            die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
          }


    
  ?>
  <!--</body>
</html>-->
