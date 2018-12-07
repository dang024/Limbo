<!--Lost item deletion script-->
<?php
  require '../database/connect_db.php';
    //Sets ItemID post variable, performs delete query with database
    $ItemID = $_POST['ItemID'];
      if(isset($ItemID)){
        $erase = mysqli_query($con, "DELETE FROM lostItems_t WHERE ItemID = $ItemID");
        }
        //Redirects to admin page if query was successful
        if($erase){
          Header('Refresh: 3; admin.php');
          echo "Lost item entry was deleted successfully.";
          }

        else{
          echo "Unable to execute $erase. ". mysqli_error($con);
        }
 ?>
