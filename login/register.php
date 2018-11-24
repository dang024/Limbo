<!--Function that will be used to create a new user account-->
<!--Has to check with users table-->
<!--Confirm password for registering-->
<!DOCTYPE html>
<?php
  if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    //users is name of the db
    $query = "INSERT INTO 'users' (email, password) VALUES('$email', '$password')";
    $result = mysqli_query($query,$conn);
    if($result){
        $msg = "Registered Successfully";
    }
    else
        $msg = 'Oops somethings went wrong';
}
 ?>

<body>
        <h2>Sign Up</h2>
        <p>Please fill out the fields below to create an account.</p>

        <form method="POST" action="account.php">
        Email: <input type="text" name="email">
        <br/>
        <br/>
        Password: <input type="password" name="password">
        <br/>
        <input type="submit" value="Login">

            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</body>
</html>
