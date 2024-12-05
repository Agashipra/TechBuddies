<?php
$servername="localhost";
$username="root";/*we set nothing so bydefault root*/
$password="";/* we set nothing so */
$dbname="loginform";/* our database name is loginform so */

/* write it in this order only and pass it in this order only */

$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    //echo"connection made successfully";
}
else
{
    echo"connection failed";
}


?>