<!DOCTYPE html>
<html>
  <body>
    <?php
    #placeholder for now, these are supposed to be superglobals,but not sure if they're meant to be changed or not
    define("HOSTNAME" , "LocalHost");
    define("USERNAME" , "admin");
    define("PASSWORD" , "gaze11e");

    #Initiates database variable
    $db = "Limbo";

/* Example from docs (Object-oriented mysqli interface)
<?php
$mysqli = mysqli_connect("example.com", "user", "password", "database");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$res = mysqli_query($mysqli, "SELECT 'A world full of ' AS _msg FROM DUAL");
$row = mysqli_fetch_assoc($res);
echo $row['_msg'];
?>
*/
     ?>
  </body>
</html>
