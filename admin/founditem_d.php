<!--Found item deletion script-->
<?php
require '../database/connect_db.php';

$ItemID = $_POST['ItemID'];
if(isset($ItemID)){
$erase = mysqli_query($con, "DELETE FROM foundItems_t WHERE ItemID = $ItemID");
}
if($erase){
    echo "Found item entry was deleted successfully.";
    Header('Location: admin.php');
}
else{
    echo "Unable to execute $erase. ". mysqli_error($con);
  }
 ?>
