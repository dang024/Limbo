<!--Script to connect to site_db locally-->
<!--none of this works yet, just pretty much the logic behind connecting to db-->
<!--probably most important piece of code in this whole project for now-->
    <?php
      session_start();
      $host = "localhost"; /* Host name */
      $user = "root"; /* User */
      $password = ""; /* Password */
      $dbname = "site_db"; /* Database name */

      $db = mysqli_connect($host, $user, $password, $dbname);
// Check connection
      if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
      }
  ?>

<!--  $Host = "myDomainName.com"; // use your real host name
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
    -->
