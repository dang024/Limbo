<!-- Authors: Maria Molloy and Tori Spychalski-->

<!DOCTYPE html>
<html>

<head>
<title>Found Items</title>
 <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
</head>

<body>

<!-- Navigation Bar -->
<ul>
  <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a href="../users/lost.php">Lost Items</a></li>
  <li><a class="active" href="../users/found.php">Found Items</a></li>
 <li><a href="../users/quicklinks.html">Quick Links</a></li>
  <li><a href="../users/FAQ.html">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Admin Login</a></li>
</ul>



<!--Script that will be used to report a found item and print table of found items-->
<?php
 session_start();
  //creates active connection to db
  require '../database/connect_db.php';
   //puts user's input into POST variable, in order to add to the database
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
    else {
        //echo 'Oops! The database is not properly connected.';
    }
    //Prints found table to page
    $query = 'SELECT itemName, dateFound, buildingFound, findersName, findersEmail FROM foundItems_t ORDER BY dateFound' ;
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
          echo '<TD>' . $row['findersName'] . '</TD>' ;
          echo '<TD>' . $row['findersEmail'] . '</TD>' ;
          echo '</TR>' ;
      }
      echo '</TABLE>';
      mysqli_free_result( $results ) ;
    }
    else
    {
      echo '<p>' . mysqli_error( $con ) . '</p>'  ;
    }
//closes connection to database
mysqli_close( $con ) ;
?>
 
<!-- Form for reporting a lost item--> 
 <h2>Report It</h2>
        <p>Please fill out all of the fields below to report a found item.</p>
        <form method="POST" action="found.php">
        Item name: <input type="text" name="itemName"><br/>
        Date Found: <input type="date" name="dateFound"><br/>
         Building Where Item Was Found: <input list="buildings" type="text" name="buildingFound">
         <!-- Dropdown for buildings on campus --> 
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
        Your Full Name: <input type="text" name="findersName"><br/>
         Your Email: <input type="text" name="findersEmail"><br/>
        <input type="submit" value="Report">
    </form>
 </body>
</html>
