<!--Found item deletion script-->
<?php
require '../database/connect_db.php';
    //Sets $ItemID using POST method
    $ItemID = $_POST['ItemID'];
    $check = mysqli_query($con, "SELECT $ItemID FROM foundItems_t WHERE ItemID = $ItemID");
      //If itemID is not empty, delete query below is performed
      if(!empty($check)){
        $erase = mysqli_query($con, "DELETE FROM foundItems_t WHERE ItemID = $ItemID");
        }
      //Runs if delete query is successful
      if($erase){
        //Redirects user to admin page after a buffer period
        Header('Refresh: 3; admin.php');
        echo "Found item entry was deleted successfully.";
        }
      //Displays error if something went wrong with query
      else{
        echo "Unable to execute $erase. ". mysqli_error($con);
        }

 ?>
