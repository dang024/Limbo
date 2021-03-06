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
 <li><a href="../users/quicklinks.html">Quick Links</a></li>
  <li><a href="../users/faq.html">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Admin Login</a></li>
</ul>

<!--Script that will be used to report a found item-->
<?php
 session_start();
  //creates active connection to db
  require '..\database\connect_db.php';
    //echo "Welcome " . $f_name, ' ', $l_name;
/* need to fix the query b/c the user cannot directly put things in the database*/
  if (isset($_POST["itemName"]) & isset($_POST["dateLost"]) & isset($_POST["buildingLost"]) & isset($_POST["ownersName"]) & isset($_POST["ownersEmail"])){
    $itemName = $_POST["itemName"];
    $dateLost = $_POST["dateLost"];
    $buildingLost = $_POST["buildingLost"];
    $ownersName = $_POST["ownersName"];
    $ownersEmail = $_POST["ownersEmail"];
    $LostItem = "INSERT INTO lostItems_t (ItemName, DateLost, BuildingLost, ownersName, ownersEmail)
                  VALUES('$itemName', '$dateLost', '$buildingLost', '$ownersName', '$ownersEmail')";
                  $result = mysqli_query($con, $LostItem);
                    if($result){
                        echo 'You have reported your lost item. Be sure to check back frequently to see if your item has been found!';
                    }
                    else
                        echo 'Oops something\'s went wrong! Please fill out all of the fields.';
}
  $query = 'SELECT ItemName, DateLost, BuildingLost, ownersName, ownersEmail FROM lostItems_t ORDER BY DateLost' ;
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
      echo '<TH>Owners Name</TH>';
      echo '<TH>Owners Email</TH>';
      echo '</TR>';
      echo '</center>';
      while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
      {
          echo '<TR>' ;
          echo '<TD>' . $row['ItemName'] . '</TD>' ;
          echo '<TD>' . $row['DateLost'] . '</TD>' ;
          echo '<TD>' . $row['BuildingLost'] . '</TD>' ;
          echo '<TD>' . $row['ownersName'] . '</TD>' ;
          echo '<TD>' . $row['ownersEmail'] . '</TD>' ;
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
//HTML form for reporting a lost item
 ?>
<h2>Report It</h2>
        <p>Please fill out all of the fields below to report a lost item.</p>
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
        Your Full Name: <input type="text" name="ownersName"><br/>
        Your Email: <input type="text" name="ownersEmail"><br/>
        <input type="submit" value="Report"></form>


 </body>
</html>
