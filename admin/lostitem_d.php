<!--Lost item deletion script-->
<?php
require '../database/connect_db.php';

$ItemID = $_POST['ItemID'];

$erase = "DELETE FROM lostItems_t WHERE ItemID = $ItemID";
if(mysqli_query($con, $erase)){
    echo "Lost item entry was deleted successfully.";
}
else{
    echo "Unable to execute $erase. ". mysqli_error($con);
  }
 ?>
