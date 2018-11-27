<!--Script that will be used to report a found item-->
<?php

    /* probably needs like html or something to make this appear on the website*/
    /* need to fix the query b/c the user cannot directly put things in the database*/
        
    $LostItem = "INSERT INTO 'lostItems_t' (ItemName, DateLost, BuildingLost)
                  VALUES('$ItemName', '$DateLost', '$BuildingLost')";

    $result = mysqli_query($query,$con);
      if($result){
          echo 'You have reported your found item. The admin will approve your post within the next 24 hrs. If you have not done so already, make sure you drop off the item at our office located in Hancock!';
      }
      else
          echo 'Oops somethings went wrong';

 ?>
