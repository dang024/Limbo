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
  <li><a class="active" href="/"> <img src="limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a href="/lost">Lost Items</a></li>
  <li><a href="/found">Found Items</a></li>
  <li><a href="/faq">FAQ</a></li>
  <li style="float:right"><a href="/login">Login</a></li>
</ul>



<!--<img src="limbologo.png" alt="Limbo Logo">

<h3>Sticky Navigation Bar Example</h3>
<p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
<p><strong>Note:</strong> Internet Explorer, Edge 15 and earlier versions do not support sticky positioning. Safari requires a -webkit- prefix.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
-->

<?php
echo "<h1>" Welcome to Limbo! "</h1>";
  
# Connect to MySQL server and the database
require( 'connect_db.php' ) ;

# Create a query to get the number, name, and price sorted by number in descending order
$query = 'SELECT ItemName, DateLost, BuildingLost FROM Lost ORDER BY DateLost' ;

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
    # But...wait until we know the query succeeded before
    # starting the table.
    echo '<H1>Recently Lost Items</H1>' ;
    echo '<TABLE border="1">';
    echo '<TR>';
    echo '<TH>Item</TH>';
    echo '<TH>Date Lost</TH>';
    echo '<th>Building Lost In</th>';
    echo '</TR>';

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
    echo '<p>' . mysqli_error( $dbc ) . '</p>'  ;
}

# Close the connection
mysqli_close( $dbc ) ;


?>

</body>

</html>