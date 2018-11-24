<!--Function that will be used to create a new user account-->
<!--Has to check with users table-->
<!--Confirm password for registering-->
<!-- <.?php
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
 ?.>-->
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
        <!--Confirm password: -->
        <input type="submit" value="Register">
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</body>
</html>
