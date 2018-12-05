<!--Admin Home Page-->
<!--Make the admin login “admin” and “gaze11e” (those are ones, not the letter “ el’s”).-->
<!DOCTYPE html>
<html>

<head>
<title>Create an Account</title>
 <link rel = "stylesheet" type = "text/css" href = "../homepage/limbostyle.css" />
</head>

<body>

<ul>
  <li><a href="../homepage/landing.php"> <img src="../homepage/limbobox.png" alt="Limbo Box" width="50" height="50"> </a></li>
  <li><a href="../users/lost.php">Lost Items</a></li>
  <li><a href="../users/found.php">Found Items</a></li>
 <li><a href="../users/quicklinks.html">Quick Links</a></li>
  <li><a href="../users/FAQ.html">FAQ</a></li>
  <li style="float:right"><a href="../login/login.php">Login</a></li>
        </ul>

        <h2>Add Admin.</h2>
        <p>Please fill out the fields below to add an admin account.</p>
        <form method="POST" action="register.php">
        First name: <input type="text" name="f_name">
        Last name: <input type="text" name="l_name">
        Email: <input type="text" name="email">
        <br/>
        <br/>
        Password: <input type="password" name="password">
        <br/>
        Confirm password: <input type="password" name="cpassword">
        <input type="submit" value="Register"></form>
        <p>Already have an account? <a href="login.php">Login here</a></p>


    <?php
      session_start();
      require '../database/connect_db.php';

      if (isset($_POST["buildingLost"]) & isset($_POST["dateFound"]) & isset($_POST["itemName"]) & isset($_POST["findersName"]) & isset($_POST["findersEmail"])) {
          $itemName = $_POST["itemName"];
          $dateFound = $_POST["dateFound"];
          $buildingFound= $_POST["buildingFound"];
          $findersName = $_POST["findersName"];
          $findersEmail = $_POST["findersEmail"];

          $foundItem = "INSERT INTO foundItems_t (ItemName, DateFound, BuildingFound, findersName, findersEmail)
                        VALUES('$itemName', '$dateFound', '$buildingFound', '$findersName', '$findersEmail')";
          echo $foundItem;

          $result = mysqli_query($con, $foundItem);

            if ($result){
                echo 'You have reported your found item. Be sure to check back frequently to see if your item has been found!';
            } else {
                echo 'Oops something went wrong! Please fill out all of the fields below.';
            }
      }
      else {
          echo 'u suck';
      }


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

  //HTML form for reporting a found item
   ?>
   <h2>Report It</h2>
          <p>Please fill out all of the fields below to report a found item.</p>
          <form method="POST" action="found.php">
          Item name: <input type="text" name="itemName"><br/>
          Date Found: <input type="date" name="dateFound"><br/>
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
          Your Full Name: <input type="text" name="findersName"><br/>
           Your Email: <input type="text" name="findersEmail"><br/>
          <input type="submit" value="Report">
      </form>

<!--      
      /*require '../users/found.php';
      require '../users/lost.php';

      //Query that allows admins to change listings
    //Insert the form here to query an item by itemID

/*
$itemID = ($_POST['ItemID']);

if ($ItemID){
mysqli_query($con, "UPDATE 'founditems_t' SET itemName, dateFound, buildingFound = 'here is where the form data will go' WHERE ItemID = $itemID");
}
      //Query that allows admins to delete entries
    $itemID = ($_POST['ItemID']);
    ?>
    if ($ItemID){
    mysqli_query($con, "DELETE FROM lostitems_t, founditems_t WHERE ItemID = $itemID);
    }
    */-->

  </body>
</html>
