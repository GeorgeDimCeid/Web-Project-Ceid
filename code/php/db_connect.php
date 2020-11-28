<?php
function dbConnect(){
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "hardb";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName )  ;
if (mysqli_connect_error()) {
    
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());

}
return $conn;

}


 ?>