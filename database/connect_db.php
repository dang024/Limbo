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
  // report the error to the user, then exit program
  die("connection object not created: ".mysqli_error($con));
}

if( mysqli_connect_errno() )  // returns false if no error occurred
{
  // report the error to the user, then exit program
  die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}

// when got here, successfully connected to database
    /*
      require('connect_db.php');
      if(isset($_POST['email']) && isset($_POST['password'])){
          $email = $_POST['email'];
          $password = $_POST['password'];

          //users is name of the db
          $query = "INSERT INTO 'users' (email, password) VALUES('$email', '$password')";
          $result = mysqli_query($query,$conn);
          if($result){
              $msg = "Registered Successfully";
          }
          else
              $msg = 'Oops somethings went wrong';
      }
      */
  ?>
  <!--</body>
</html>-->
