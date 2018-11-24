<!--Admin Home Page-->
<!--Make the admin login “admin” and “gaze11e” (those are ones, not the letter “ el’s”).-->
<!DOCTYPE html>
<?php session_start(); ?>
<html>
  <body>
    <?php

      #Figure out best way to input found items as an admin
      $FoundItem = "INSERT INTO 'foundItems_t'(ItemName, DateLost, BuildingLost)
                      VALUES"

      #Function for inserting a lost item and info
      $LostItem = "INSERT INTO 'lostItems_t' (ItemName, DateLost, BuildingLost)
                  VALUES('$f_name', '$l_name', '$email', '$password')";
      $result = mysqli_query($query,$conn);
      if($result){
          echo 'You have registered successfully!';
      }
      else
          echo 'Oops somethings went wrong';

      #Function for editing an item's parameters

      #Function for granting users admin privilege




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
