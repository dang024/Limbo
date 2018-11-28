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


                  $result = mysqli_query($con, $LostItem);
                    if($result){
                        echo 'You have reported your found item. The admin will approve your post within the next 24 hrs. Be sure to check back frequently to see if your item has been found!';
                    }
                    else
                        echo 'Oops something\'s went wrong';
}

  $query = 'SELECT ItemName, DateLost, BuildingLost FROM lostItems_t ORDER BY DateLost' ;
  $results = mysqli_query($con, $query ) ;

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
        Building Where Item Was Lost: <input list="buildings" type="text" name="buildingLost">
          <datalist id="buildings">
            <option value="Byrne House">
            <option value="Cannavino Library">
            <option value="Champagnat Hall">
            <option value="Chapel">
            <option value="Cornell Boathouse">
            <option value="Donnelly Hall">
            <option value="Dyson Center">
            <option value="Fern Tor">
              <option value="Fontaine Hall">
              <option value="Foy Townhouses">
              <option value="Lower Fulton Street Townhouses">
              <option value="Upper Fulton Street Townhouses">
              <option value="Greystone Hall">
              <option value="Hancock Center">
              <option value="Kieran Gatehouse">
              <option value="Kirk House">
              <option value="Leo Hall">
              <option value="Longview Park">
              <option value="Lowell Thomas">
              <option value="Lower Townhouses">
              <option value="Marian Hall">
              <option value="Marist Boathouse">
              <option value="McCann Center">
              <option value="Mid-Rise Hall">
                <option value="North Campus Housing Complex">
                <option value="St. Ann's Hermitage">
                <option value="St. Peter's">
                <option value="Science and Allied Health Building">
                <option value="Sheahan Hall">
                <option value="Steel Plant Studios and Gallery">
                <option value="Student Center/Music Building">
                <option value="Lower West Ceder Townhouses">
              <option value="Upper West Ceder Townhouses">
        </datalist>
        <br/>
        <input type="submit" value="Report"></form>


 </body>
</html>
