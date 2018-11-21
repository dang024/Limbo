    <?php
    session_start();

          if (!isset($_SESSION)['logged_in']) || $_SESSION)['logged_in'] == false){
            header("Location: login.php")
          }

     ?>


  <!--To do:
  make profile page, could be a require to another script maybe
  make a Logout function-->
