<!--Script to connect to site_db locally-->
<?php
    session_start();
    $host = "localhost"; /* Host name */
    $user = "root"; /* User */
    $password = ""; /* Password */
    $dbname = "limbo_db"; /* Database name */

    $db = mysqli_connect($host, $user, $password, $dbname);
// Check connection
    if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
}
?>
