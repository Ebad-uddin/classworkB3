<?php
$connection = mysqli_connect("localhost", "root", "", "users");
if($connection){
    echo "connected";
}
else{
    die("connection failed" or mysqli_connect_error());
}

?>