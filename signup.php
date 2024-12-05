<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="signup-style.css">
        <title>Signup</title>
    </head>
    <body>
        <div class="container">
            <h1>Create Your Account</h1>

            <form action="login.php" method="POST"

                <div class="form">
                    <input type="text" name="fullname" class="textfield" placeholder="Full Name" required>
                    <input type="email" name="email" class="textfield" placeholder="Email Address" required>
                    <input type="text" name="username" class="textfield" placeholder="Username" required>
                    <input type="password" name="password" class="textfield" placeholder="Password" required>
                    <input type="password" name="confirm-password" class="textfield" placeholder="Confirm Password" required>

                    <input type="submit" name="signup" value="Sign Up" class="btn">

                    <div class="login">Already have an account? <a href="login.php" class="link">Log in here</a></div>
                </div>
            </form>
        </div>
    </body>
</html>


<?php
include("connection.php");
if(isset($_POST['signup']))
{
    $fname=$_POST['fullname'];
    $email=$_POST['email'];
    $user=$_POST['username'];
    $pwd=$_POST['password'];
    $cpwd=$_POST['confirm-password'];

    $query="INSERT INTO info values('$fname', '$email', '$user', '$pwd', '$cpwd')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo"data inserted successfully";
    }
    else{
        echo"data not inserted";
    }
}
?>
