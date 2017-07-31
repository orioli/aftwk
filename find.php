<?php
$host = "localhost";
$user = "id2403862_jose";
$password = "klkl@123";
$database = "id2403862_afterwork";
$connection = mysqli_connect($host,$user,$password,$database);

/* check connection */
if (mysqli_connect_errno()) {
    //die("Connect failed: ", mysqli_connect_error() );
    print("failed to connect");
}

$hotel =$_REQUEST['hotel'];

$query = "SELECT * FROM BROADCASTS WHERE txt LIKE '%$hotel%'";
 
if ($result = mysqli_query($connection ,$query))
{
    print($result);
}


?>
