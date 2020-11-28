<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }



$name= $_POST['email'] ?? 'default';

//$pass= password_hash($_POST["password"],PASSWORD_DEFAULT);
$pass=$_POST["password"];
$sql="SELECT  email , password, type FROM users WHERE email  = ?";


$stmt = $conn->prepare($sql);

$stmt->bind_param('s', $name);

$stmt->execute();
$stmt->store_result();


if ($stmt->num_rows > 0) {
    $stmt->bind_result( $email, $password, $type);
    $use  r=$stmt->fetch();
    $stmt->close();
   
    // unique usernames => {1 row fetched => success, 0 rows fetched => wrong input}
   
     if ($pass==$password) {
        header('HTTP/2 200 OK'); 
        header("Content-type: application/json");

        if ($type == "user"){
            echo json_encode($type); 
            $_SESSION['email'] = $name;
            $_SESSION['type'] = "user";
         }
        else if ($type == "admin"){
            echo json_encode($type); 
            $_SESSION["email"] = $name;
            $_SESSION["type"] = "admin";
        }
    }
    else {
        exit();
    }
}else 
{ die("incorrect");
    # code...
}
    
?>

