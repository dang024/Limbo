<!--Function that will be used to create a new user account-->
<!--Has to check with users table-->
<!--Confirm password for registering-->
<!DOCTYPE html>
<html>

<head>
<title>Create an Account</title>
 <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
</head>

<body>

<ul>
  <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a href="../users/lost.php">Lost Items</a></li>
  <li><a href="../users/found.php">Found Items</a></li>
  <li><a href="../users/quicklinks.html">Quick Links</a></li>
  <li><a href="../users/FAQ.html">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Login</a></li>
        </ul>

        <p>Report a found item <a href="<?php echo '../users/found.php'; ?>">here.</a></p>

        <p>Report a lost item <a href="<?php echo '../users/lost.php'; ?>">here.</a></p>

        <p>Delete a found item entry <a href = "<?php echo 'founditem.php'; ?>">here.</a></p>

        <p>Delete a lost item entry <a href = "<?php echo 'lostitem.php'; ?>">here.</a></p>

        <h2>Add Admin.</h2>
        <p>Please fill out the fields below to add an admin account.</p>
        <form method="POST" action="accountregister.php">
        Username: <input type="text" name="userName">
        First name: <input type="text" name="f_name">
        Last name: <input type="text" name="l_name">
        Email: <input type="text" name="email">
        <br/>
        <br/>
        Password: <input type="password" name="password">
        <br/>
        Confirm password: <input type="password" name="c_password">
        <input type="submit" value="Register"></form>
        <!--<p>Already have an account? <a href="login.php">Login here.</a></p>-->


<?php
session_start();
  //creates active connection to db
  require '../database/connect_db.php';
?>

<!--Query That will allow admins to delete item entries entirely, actually just hides them
<form method="POST" action="accountregister.php">
Username: <input type="text" name="userName">
First name: <input type="text" name="f_name">
Last name: <input type="text" name="l_name">
Email: <input type="text" name="email">
<br/>
<br/>
Password: <input type="password" name="password">
<br/>
Confirm password: <input type="password" name="c_password">
<input type="submit" value="Register"></form>
-->




<!--
    //echo "Welcome " . $f_name, ' ', $l_name;
/* need to fix the query b/c the user cannot directly put things in the database*/
if (isset($_POST["buildingFound"]) & isset($_POST["dateFound"]) & isset($_POST["itemName"]) & isset($_POST["findersName"]) & isset($_POST["findersEmail"])) {
    $itemName = $_POST["itemName"];
    $dateFound = $_POST["dateFound"];
    $buildingFound = $_POST["buildingFound"];
    $findersName = $_POST["findersName"];
    $findersEmail = $_POST["findersEmail"];
    $foundItem = "INSERT INTO foundItems_t (ItemName, DateFound, BuildingFound, findersName, findersEmail)
                  VALUES('$itemName', '$dateFound', '$buildingFound', '$findersName', '$findersEmail')";

    $result = mysqli_query($con, $foundItem);

     //checks that user input on the form has all fields filled out and adds new item to database
      if ($result){
          echo 'You have reported your found item. Be sure to check back frequently to see if your item has been found!';
      } else {
          echo 'Oops something went wrong! Please fill out all of the fields below.';
      }
}
?> -->
</body>
</html>
<!--For editing items, there will be a put request-->
<!--For hiding items from db, from UPDATE TABLE HIDDEN = 1, where ID = 'blank'-->
