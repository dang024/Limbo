<!--Form for deleting an item from foundItems_t-->
<!DOCTYPE html>
<html>
<head><link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" /></head>
  <body>

    <ul>
      <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
      <li><a href="../users/lost.php">Lost Items</a></li>
      <li><a href="../users/found.php">Found Items</a></li>
      <li><a href="../users/quicklinks.html">Quick Links</a></li>
      <li><a href="../users/faq.html">FAQ</a></li>
      <li style="float:right"><a href="../login/login.php">Admin Login</a></li>
    </ul>

<?php
require '../database/connect_db.php';
$query = 'SELECT ItemID, itemName, dateFound, buildingFound FROM foundItems_t ORDER BY dateFound' ;
$results = mysqli_query( $con , $query ) ;
if( $results ){
  echo '<H1>Found and Unclaimed Items</H1>' ;
  echo '<center>';
  echo '<TABLE>';
  echo '<TR>';
  echo '<TH>Item ID</TH>';
  echo '<TH>Item</TH>';
  echo '<TH>Date Found</TH>';
  echo '<th>Building Found In</th>';
  echo '</TR>';
  echo '</center>';
  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {
      echo '<TR>' ;
      echo '<TD>' . $row['ItemID'] . '</TD>' ;
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

mysqli_close($con);
  ?>

  <p>Please enter the Item ID to delete a found item entry.</p>
  <form method="POST" action="founditem_d.php">
  Item ID: <input type="number" name="ItemID" min="1">
  <input type="submit" value="Delete">
</form>
  </body>
</html>
