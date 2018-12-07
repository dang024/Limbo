<!DOCTYPE html>
<html>
<title>Delete an item entry</title>
<?php
require '../database/connect_db.php';

//inputs
$text = mysqli_real_escape_string($_POST['text']);

$sqlqr = "INSERT INTO `ncool`.`coolbits_table` (`name`, `text`, `date`) VALUES ('" . $name . "', '" . $text . "', CURRENT_TIMESTAMP);";

mysqli_query($mysqli,$sqlqr); //function where the magic happens.
mysqli_query($con, "SELECT * FROM users");

//Logic to see whether item is from lostItems_t or foundItems_t
$delete = mysqli_query($con, "UPDATE ")
 ?>


</html>
