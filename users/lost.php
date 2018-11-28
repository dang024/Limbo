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
