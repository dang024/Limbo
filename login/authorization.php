<!DOCTYPE html>
<html>
<?php
// Start the session on this page
session_start();
// If the session is empty or the logged_in variable is not set to YES, then send a forbidden code and die
if (empty($_SESSION) || $_SESSION['logged_in'] != 'YES') {
    http_response_code(403);
    die('Forbidden');
}
// Nice little message, put your page stuff here
echo 'You are on a page that requires authorization';
?>
<br>
<!-- Use this to log the user out. Remember, the user will be logged in and have a valid session until they log out -->
<a href="logout.php">Logout</a>
</html>
