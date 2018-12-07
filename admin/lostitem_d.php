<!--Lost item deletion script-->
<?php
require '../database/connect_db.php';

$ItemID = $_POST['ItemID'];
if(isset($ItemID)){
$erase = mysqli_query($con, "DELETE FROM lostItems_t WHERE ItemID = $ItemID");
}
if($erase){
    Header('Refresh: 3; admin.php');
    echo "Found item entry was deleted successfully.";

}
else{
    echo "Unable to execute $erase. ". mysqli_error($con);
  }
 ?>
