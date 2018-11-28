<!DOCTYPE html>
<html>

<head>
<title>Lost Items</title>
 <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
</head>

<body>

<ul>
  <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a  class="active" href="/">Lost Items</a></li>
  <li><a href="../users/found.php">Found Items</a></li>
  <li><a href="/faq.php">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Login</a></li>
</ul>

<!--Script that will be used to report a found item-->
<?php

 session_start();
  //creates active connection to db
  require 'C:\Users\danny\Desktop\Limbo\database\connect_db.php';
    $itemName = $_POST["itemName"];
    $dateLost = $_POST["dateLost"];
    $buildingLost = $_POST["buildingLost"]
    //echo "Welcome " . $f_name, ' ', $l_name;
/* need to fix the query b/c the user cannot directly put things in the database*/

    $LostItem = "INSERT INTO 'lostItems_t' (ItemName, DateLost, BuildingLost)
                  VALUES('$ItemName', '$DateLost', '$BuildingLost')";

    $result = mysqli_query($query,$con);
      if($result){
          echo 'You have reported your found item. The admin will approve your post within the next 24 hrs. Be sure to check back frequently to see if your item has been found!';
      }
      else
          echo 'Oops somethings went wrong';

/* need to fix the query b/c the user cannot directly put things in the database*/

  /*  $LostItem = "INSERT INTO 'lostItems_t' (ItemName, DateLost, BuildingLost)
                  VALUES('$ItemName', '$DateLost', '$BuildingLost')";

    $result = mysqli_query($query,$con);
      if($result){
          echo 'You have reported your found item. The admin will approve your post within the next 24 hrs. Be sure to check back frequently to see if your item has been found!';
      }
      else */
          echo 'Oops somethings went wrong';

/*
    99% sure this is how you query with php into the database
$firstName = getLogin($_POST['f_name']);
    $lastName = getLogin($_POST['l_name']);
    $email = getLogin($_POST['email']);
    $password = getLogin($_POST['password']);*/
 ?>
 
 </body>
</html>
