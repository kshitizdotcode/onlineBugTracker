<?php
$server="localhost";
$username="root";
$password="";
$db="obt";
$con=mysqli_connect($server,$username,$password,$db);
if (!$con) {
    echo "Error";
}
?>