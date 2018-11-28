<!DOCTYPE html>
<html>

<head>
<title>LIMBO</title>
 <link rel = "stylesheet" type = "text/css" href = "limbostyle.css" />
</head>

<body>

<div class="header">
	</br></br></br></br></br></br>
	<center><img src="limbologwhite.png" alt="Limbo Logo"></center>
	<h3>Marist College's Lost and Found</h3>
	</br></br></br></br></br></br>

</div>

<ul>
  <li><a class="active" href="/landing.php"> <img src="limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a href="../users/lost.php">Lost Items</a></li>
  <li><a href="../users/found.php">Found Items</a></li>
  <li><a href="../users/FAQ.html">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Login</a></li>
</ul>
<h1> Welcome to Limbo! </h1>


<?php
# Connect to MySQL server and the database
require '..\database\connect_db.php';

# Create a query to get the number, name, and price sorted by number in descending order
$query = 'SELECT ItemName, DateLost, BuildingLost FROM lostItems_t ORDER BY DateLost' ;

# Execute the query
$results = mysqli_query( $con , $query ) ;

# Show results
if( $results )
{
    # But...wait until we know the query succeeded before
    # starting the table.
    echo '<H1>Recently Lost Items</H1>' ;
    echo '<center>';
    echo '<TABLE border="1">';
    echo '<TR>';
    echo '<TH>Item</TH>';
    echo '<TH>Date Lost</TH>';
    echo '<th>Building Lost In</th>';
    echo '</TR>';
    echo '</center>';

    # For each row result, generate a table row
    while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
    {
        echo '<TR>' ;
        echo '<TD>' . $row['ItemName'] . '</TD>' ;
        echo '<TD>' . $row['DateLost'] . '</TD>' ;
        echo '<TD>' . $row['BuildingLost'] . '</TD>' ;
        echo '</TR>' ;
    }

    # End the table
    echo '</TABLE>';

    # Free up the results in memory
    mysqli_free_result( $results ) ;
}
else
{
    # If we get here, something has gone wrong
    echo '<p>' . mysqli_error( $con ) . '</p>'  ;
}

$query = 'SELECT itemName, dateFound, buildingFound FROM foundItems_t ORDER BY dateFound' ;
$results = mysqli_query( $con , $query ) ;

if( $results ){
  echo '<H1> Recently Found and Unclaimed Items</H1>' ;
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

# Close the connection
mysqli_close( $con ) ;


?>

</body>

</html>
