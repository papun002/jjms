<?php
$server = "192.168.184.209";
$username = "root";
$password = "";
$database = "j";

$con = mysqli_connect($server,$username,$password,$database);
if(!$con){
    echo "Not Connected";
}
?>
