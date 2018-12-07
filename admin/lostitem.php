<!--Form for deleting an item from lostItems_t-->
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
$query = 'SELECT ItemID, ItemName, DateLost, BuildingLost, ownersName, ownersEmail FROM lostItems_t ORDER BY DateLost' ;
$results = mysqli_query($con, $query ) ;
if( $results )
{
    echo '<H1>Recently Lost Items</H1>' ;
    echo '<center>';
    echo '<TABLE border="1">';
    echo '<TR>';
    echo '<th>Item ID</th>';
    echo '<TH>Item</TH>';
    echo '<TH>Date Lost</TH>';
    echo '<th>Building Lost In</th>';
    echo '</TR>';
    echo '</center>';
    while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
    {
        echo '<TR>' ;
        echo '<TD>' . $row['ItemID'] . '</TD>' ;
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
mysqli_close($con);
 ?>
</body>
</html>
