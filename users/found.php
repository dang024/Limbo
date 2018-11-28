<!DOCTYPE html>
<html>

<head>
<title>Found Items</title>
 <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
</head>

<body>

<ul>
  <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a href="../users/lost">Lost Items</a></li>
  <li><a class="active" href="../users/found">Found Items</a></li>
  <li><a href="../users/faq.php">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Login</a></li>
</ul>

<!--Script that will be used to report a found item-->
<?php
 session_start();
  //creates active connection to db
  require 'C:\Users\danny\Desktop\Limbo\database\connect_db.php';
    $itemName = $_POST["itemName"];
    $dateFound = $_POST["dateFound"];
    $buildingFound = $_POST["buildingFound"]
   // echo "Welcome " . $f_name, ' ', $l_name;
/* need to fix the query b/c the user cannot directly put things in the database*/

    $LostItem = "INSERT INTO 'foundItems_t' (ItemName, DateFound, BuildingFound)
                  VALUES('$ItemName', '$DateFound', '$BuildingFound')";

    $result = mysqli_query($query,$con);
      if($result){
          echo 'You have reported your found item. The admin will approve your post within the next 24 hrs. Be sure to check back frequently to see if your item has been found!';
      }
      else
          echo 'Oops somethings went wrong';


    /* probably needs like html or something to make this appear on the website*/
    /* need to fix the query b/c the user cannot directly put things in the database*/
        
 /*   $LostItem = "INSERT INTO 'lostItems_t' (ItemName, DateLost, BuildingLost)
                  VALUES('$ItemName', '$DateLost', '$BuildingLost')";

    $result = mysqli_query($query,$con);
      if($result){
          echo 'You have reported your found item. The admin will approve your post within the next 24 hrs. If you have not done so already, make sure you drop off the item at our office located in Hancock!';
      }
      else
          echo 'Oops somethings went wrong';*/

 ?>

</body>
</html>
