<!--Admin Home Page-->
<!--Make the admin login “admin” and “gaze11e” (those are ones, not the letter “ el’s”).-->
<!DOCTYPE html>
<?php session_start(); ?>
<html>
  <body>
    <?php
      require '..\database\connect_db.php';
      require '..\users\found.php';
      require '..\users\lost.php';

      //Query that allows admins to change listings
    //Insert the form here to query an item by itemID


$itemID = ($_POST['ItemID']);

if ($ItemID){
mysqli_query($con, "UPDATE 'founditems_t' SET itemName, dateFound, buildingFound = 'here is where the form data will go' WHERE ItemID = $itemID");
}
      //Query that allows admins to delete entries
    $itemID = ($_POST['ItemID']);
    /*?>
    if ($ItemID){
    mysqli_query($con, "DELETE FROM lostitems_t, founditems_t WHERE ItemID = $itemID);
    }
    */
      ?>
  </body>
</html>
