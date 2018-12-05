<!-- Author: Maria Molloy-->
<!DOCTYPE html>
<html>

<head>
<title>LIMBO</title>
 <link rel = "stylesheet" type = "text/css" href = "limbostyle.css" />
</head>

<body>

<!--Limbo Logo -->
<div class="header">
	</br></br></br></br></br></br></br></br>
	<center><img src="limbologwhite.png" alt="Limbo Logo"></center>
	<h3>Marist College's Lost and Found</h3>
	</br></br></br></br></br></br></br></br>

</div>

<!-- Navigation Bar -->
<ul>
  <li><a class="active" href="/landing.php"> <img src="limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a href="../users/lost.php">Lost Items</a></li>
  <li><a href="../users/found.php">Found Items</a></li>
 <li><a href="../users/quicklinks.html">Quick Links</a></li>
 <li><a href="../users/FAQ.html">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Admin Login</a></li>
</ul>

</br><img src="limbolandingpic.jpg" alt="Kids Holding Logo"></br>
<h1> Welcome to Limbo! </h1>
<h2> Marist College's #1 solution for reuniting owners with their lost items</h2>
<p>Report a lost item by clicking the "Lost" tab, and report a found item by clicking the "Found" tab!</p></br></br>


<?php
//Connect to MySQL server and the database
require '../database/connect_db.php';

//Create a query to get the recent lost items sorted by the date they were lost
$query = 'SELECT ItemName, DateLost, BuildingLost FROM lostItems_t ORDER BY DateLost' ;

//Execute the query
$results = mysqli_query( $con , $query ) ;

//Print table of lost items to page
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

//Create query to get the recently found items and sort them by the date they were found
$query = 'SELECT itemName, dateFound, buildingFound FROM foundItems_t ORDER BY dateFound' ;
$results = mysqli_query( $con , $query ) ;

//Create and print table of found items to page
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

//Close the connection
mysqli_close( $con ) ;


?>

</body>

</html>
