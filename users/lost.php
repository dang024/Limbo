<<<<<<< current
<!DOCTYPE html>
<html>

<head>
<title>Lost Items</title>
 <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
</head>

<body>

<ul>
  <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a  class="active" href="../users/lost.php">Lost Items</a></li>
  <li><a href="../users/found.php">Found Items</a></li>
  <li><a href="/faq.php">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Login</a></li>
</ul>

<!--Script that will be used to report a found item-->
<?php

 session_start();
  //creates active connection to db
  require '..\database\connect_db.php';
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
          echo 'Oops something\'s went wrong';

/* need to fix the query b/c the user cannot directly put things in the database*/

  /*  $LostItem = "INSERT INTO 'lostItems_t' (ItemName, DateLost, BuildingLost)
                  VALUES('$ItemName', '$DateLost', '$BuildingLost')";

    $result = mysqli_query($query,$con);
      if($result){
          echo 'You have reported your found item. The admin will approve your post within the next 24 hrs. Be sure to check back frequently to see if your item has been found!';
      }
      else */
          //echo 'Oops something\'s went wrong';
 ?>
<h2>Report It</h2>
        <p>Please fill out the fields below to report a lost item.</p>
        <form method="POST" action="lost.php">
        Item Lost: <input type="text" name="itemName"><br/>
        Date Lost: <input type="date" name="dateLost"><br/>
        Building Where Item Was Lost: <input type="text" name="buildingLost">
        <br/>
        <input type="submit" value="Report">

 </body>
</html>
=======
<!DOCTYPE html>
<html>

<head>
<title>Lost Items</title>
 <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
</head>

<body>

<ul>
  <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a  class="active" href="../users/lost.php">Lost Items</a></li>
  <li><a href="../users/found.php">Found Items</a></li>
  <li><a href="/faq.php">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Login</a></li>
</ul>

<!--Script that will be used to report a found item-->
<?php

 session_start();
  //creates active connection to db
  require '..\database\connect_db.php';

    if(isset($_POST["itemName"])){
     $itemName = $_POST["itemName"];}
    if(isset($_POST["dateLost"])){
    $dateFound = $_POST["dateLost"];}
    if(isset($_POST["buildingLost"])){
    $buildingFound = $_POST["buildingLost"];}
    //echo "Welcome " . $f_name, ' ', $l_name;
/* need to fix the query b/c the user cannot directly put things in the database*/
  if (isset($itemName, $dateLost, $buildingLost) == true){
    $LostItem = "INSERT INTO 'lostItems_t' (ItemName, DateLost, BuildingLost)
                  VALUES('$ItemName', '$DateLost', '$BuildingLost')";


                  $result = mysqli_query($con,$LostItem);
                    if($result){
                        echo 'You have reported your found item. The admin will approve your post within the next 24 hrs. Be sure to check back frequently to see if your item has been found!';
                    }
                    else
                        echo 'Oops something\'s went wrong';
  }

  $query = 'SELECT ItemName, DateLost, BuildingLost FROM lostItems_t ORDER BY DateLost' ;
  $results = mysqli_query( $con , $query ) ;

  if( $results )
  {
      echo '<H1>Recently Lost Items</H1>' ;
      echo '<center>';
      echo '<TABLE border="1">';
      echo '<TR>';
      echo '<TH>Item</TH>';
      echo '<TH>Date Lost</TH>';
      echo '<th>Building Lost In</th>';
      echo '</TR>';
      echo '</center>';

      while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
      {
          echo '<TR>' ;
          echo '<TD>' . $row['ItemName'] . '</TD>' ;
          echo '<TD>' . $row['DateLost'] . '</TD>' ;
          echo '<TD>' . $row['BuildingLost'] . '</TD>' ;
          echo '</TR>' ;
      }

      echo '</TABLE>';

      mysqli_free_result( $results ) ;
  }
  else
  {
      echo '<p>' . mysqli_error( $con ) . '</p>'  ;
  }

  # Close the connection
  mysqli_close( $con ) ;


/* need to fix the query b/c the user cannot directly put things in the database*/

  /*  $LostItem = "INSERT INTO 'lostItems_t' (ItemName, DateLost, BuildingLost)
                  VALUES('$ItemName', '$DateLost', '$BuildingLost')";

    $result = mysqli_query($query,$con);
      if($result){
          echo 'You have reported your found item. The admin will approve your post within the next 24 hrs. Be sure to check back frequently to see if your item has been found!';
      }
      else */
          //echo 'Oops something\'s went wrong';
 ?>
<h2>Report It</h2>
        <p>Please fill out the fields below to report a lost item.</p>
        <form method="POST" action="lost.php">
        Item Lost: <input type="text" name="itemName"><br/>
        Date Lost: <input type="date" name="dateLost"><br/>
        Building Where Item Was Lost: <input type="text" name="buildingLost">
        <br/>
        <input type="submit" value="Report">

 </body>
</html>
>>>>>>> before discard
