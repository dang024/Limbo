<!DOCTYPE html>
<html>

<head>
<title>Found Items</title>
 <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
</head>

<body>

<ul>
  <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a href="../users/lost.php">Lost Items</a></li>
  <li><a class="active" href="../users/found.php">Found Items</a></li>
  <li><a href="../users/FAQ.html">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Login</a></li>
</ul>

<h2>Report It</h2>
       <p>Please fill out the fields below to report a found item.</p>
       <form method="POST" action="admin.php">
       Item name: <input type="text" name="itemName">
       Date Found: <input type="date" name="dateFound">
       Building where item was found: <input type="text" name="buildingFound">
       <br/>
       <input type="submit" value="Report">

<!--Script that will be used to report a found item-->
<?php
        
 session_start();
  //creates active connection to db
  require '..\database\connect_db.php';
    $itemName = $_POST["itemName"];
    $dateFound = $_POST["dateFound"];
    $buildingFound = $_POST["buildingFound"];
   // echo "Welcome " . $f_name, ' ', $l_name;
/* need to fix the query b/c the user cannot directly put things in the database*/
    if (isset($itemName, $dateFound, $buildingFound) == true){
    $LostItem = "INSERT INTO 'foundItems_t' (ItemName, DateFound, BuildingFound)
                  VALUES('$ItemName', '$DateFound', '$BuildingFound')";
                }
    $result = mysqli_query($con, $LostItem);
      if ($result){
          echo 'You have reported your found item. The admin will approve your post within the next 24 hrs. Be sure to check back frequently to see if your item has been found!';
      }
      else {
          echo 'Oops something went wrong';
      }
        
        
    $query = 'SELECT itemName, dateFound, buildingFound FROM foundItems_t ORDER BY dateFound' ;
    $results = mysqli_query( $con , $query ) ;
        
    if( $results ){
      echo '<H1>Found and Unclaimed Items</H1>' ;
      echo '<center>';
      echo '<TABLE>';
      echo '<TR>';
      echo '<TH>Item</TH>';
      echo '<TH>Date Found</TH>';
      echo '<th>Building Found In</th>';
      echo '</TR>';
      echo '</center>';
      # For each row result, generate a table row
      while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
      {
          echo '<TR>' ;
          echo '<TD>' . $row['itemName'] . '</TD>' ;
          echo '<TD>' . $row['dateFound'] . '</TD>' ;
          echo '<TD>' . $row['buildingFound'] . '</TD>' ;
          echo '</TR>' ;
      }
      echo '</TABLE>';
      mysqli_free_result( $results ) ;
    }
    else
    {
      echo '<p>' . mysqli_error( $con ) . '</p>'  ;
    }

mysqli_close( $con ) ;
   


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
