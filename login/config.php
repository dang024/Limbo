<?php
session_start();
$host = "localhost"; /* Host name */
$user = "alyssa.lynch1@marist.edu"; /* User */
$password = "password"; /* Password */
$dbname = "site_db"; /* Database name */

$con = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
