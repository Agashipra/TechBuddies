<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="login-style.css">
        <title>Login</title>

    </head>
    <body>
        <div class="container">
            <h1>Login</h1>

            <form action="#" method="POST">

            <div class="form">
                <input type="text" name="username" class="textfield" placeholder="username">
                <input type="password" name="password" class="textfield" placeholder="password">

                <div class="forgetpass"><a href="#" class="link" onclick="message()">Forget Password ?</a></div>

                <input type="submit" name="login" value="Login" class="btn">
                <div class="signup">New User ? <a href="signup.php" class="link">Signup here</a></div>
            </div>
        </div>
    </form>
        <script>
            function message()
            {
                alert("Don't worry try to recall it");
            }
        </script>
    </body>
</html>


<?php

    include("connection.php"); 
    
    if(isset($_POST['login']))/* isset means ki set hua bhi nahi and post is type of method and login is name of button*/
    {
        $username=$_POST['username'];/*it is calling username from upper and storing in username*/
        $pwd=$_POST['password'];

        $query="select * from info where username='$username' && password='$pwd'";/* query to fetch data from table */
        $data=mysqli_query($conn,$query);/* it knows ki query runned or not and if yes then how many rows found*/

        $total=mysqli_num_rows($data);/*it tells the no of rows found matched records*/

        //echo $total;/*tells total no of records found*/

        if($total==1)
        {
            echo"login successfully";
            header('location:index.html');
        }
        else
        {
            echo"Login Failed enter correct details";
        }

    }

?>
