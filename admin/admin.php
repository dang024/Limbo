<!--Admin Home Page-->
<!--Make the admin login “admin” and “gaze11e” (those are ones, not the letter “ el’s”).-->
<!DOCTYPE html>
<?php session_start(); ?>
<html>
  <body>
    <?php
      require '..\database\connect_db.php';

      #Figure out best way to input found items as an admin
      //Query that checks with lostItems_t to see if any of them match
      //Somehow make it so that when entering an item, stuff is selected from a dropdown
      //For example for ConditionFound make it so that u can only choose from (worn)
      //Date stuff can be like select from a calendar
     $FoundItem = "INSERT INTO 'foundItems_t'(ItemName, DateFound, BuildingFound)
                   VALUES('$ItemName', '$DateFound', '$BuildingFound')";
     $mysqli_result = mysqli_query($con,$FoundItem);

                        //Function for making sure results are returned from db query, maybe else statement to say nothing was found
            if (!$result = NULL) {
              echo "<table><tr><th>user_id</th><th>email</th></tr>";
                while($row = mysqli_fetch_assoc($mysqli_result)) {
                  echo "<tr><td>".$row["user_id"]."</td><td>".$row["email"]."</td></tr>";
                    }
                      echo "</table>";
                        }
      //Add comment section for like unique marks on items and stuff

      //insert query thingy here

      #Function for inserting a lost item and info
      $LostItem = "INSERT INTO 'lostItems_t' (ItemName, DateLost, BuildingLost)
                  VALUES('$ItemName', '$DateLost', '$BuildingLost')";

      //This stuff below has to do some other stuff to make it a real query, still working on that
      $result = mysqli_query($query,$con);
      if($result){
          echo 'You have registered successfully!';
      }
      else
          echo 'Oops somethings went wrong';

      #Function for editing an item's parameters

      #Function for granting users admin privilege

      //Checks to see if user is admin or not, AdminPriv = 1 for admins
      if (AdminPriv != 1){
        //Query that checks if user is admin or not,
      }
        else echo 'That user already has administrator privileges.';

      //Logic for this would be something along the lines of
      //if user != admin, then set to admin
      //error would be like "x user is already an admin" (insert first name into x)
      //would have to identify users by email address



/*Admin Requirements:
- Change status of an item from lost to found
- Add new found item entries
- Edit item entries? (not really sure about this one)
- Have access to user contact info to notify them of item status (automated email thing maybe)
- Function to delete found items
- Admin must be able to change their Password
- Use TIMESTAMP as datatype for when item is entered or found or whatever

admin table is admin_t

/* INSERT INTO foundItems_t(ItemName, ConiditionFound, DateFound, BuildingFound)
INSERT INTO owner_t (FirstName, LastName, ItemLost, DateLost, BuildingLost, OwnerEmail, ItemStatus)
INSERT INTO finder_t (FirstName, LastName, ItemFound, DateReturned, FinderEmail) */
    ?>

  </body>
</html
