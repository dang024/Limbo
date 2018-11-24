<!--Function that will be used to create a new user account-->
<!--Has to check with users table-->
<!--Confirm password for registering-->

<!DOCTYPE html>
<body>
        <h2>Sign Up</h2>
        <p>Please fill out the fields below to create an account.</p>
        <form method="POST" action="accountregister.php">
        First name: <input type="text" name="f_name">
        Last name: <input type="text" name="l_name">
        Email: <input type="text" name="email">
        <br/>
        <br/>
        Password: <input type="password" name="password">
        <br/>
        Confirm password: <input type="password" name="cpassword">

        <!-- confirm password if statement works in theory, not tested yet -->
        <?php if ($_POST["password"] != $_POST["cpassword"]){
          echo "Passwords do not match, please try again";
        } ?>

        <input type="submit" value="Register">
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</body>
</html>
