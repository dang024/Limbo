<!DOCTYPE html>
<?php session_start(); ?>
<html>
  <body>
    <?php
        function AddLostItem(
            INSERT INTO lostitems_t (ItemName, DateLost, BuildingLost)
            Values ( NameEntered, DateEntered, LocEntered);
        )
        
        function AddFoundItem(
            INSERT INTO founditems_t(ItemName, DateFound, BuildingFound)
            VALUES(NameEntered, DateEntered, LocEntered)
        )
        
        function LostToFound(
            INSERT INTO foundItems(ItemName, DateFound, BuildingFound)
            VALUES(LostName, LostDate, LostLoc)
        )
?>
      
