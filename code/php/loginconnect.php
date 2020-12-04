<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }



$name= $_POST['username'] ?? 'default';

//$pass= password_hash($_POST["password"],PASSWORD_DEFAULT);
$pass=$_POST["password"];
$sql="SELECT   password, type FROM users WHERE username  = ?";


$stmt = $conn->prepare($sql);

$stmt->bind_param('s', $name);

$stmt->execute();
$stmt->store_result();


if ($stmt->num_rows > 0) {
    $stmt->bind_result(  $password, $type);
    $use =$stmt->fetch();
    $stmt->close();
   
    // unique usernames => {1 row fetched => success, 0 rows fetched => wrong input}
    
     if (password_verify($pass,$password)) {
        header("Content-type: application/json");

        if ($type == "user"){
            echo json_encode($type); 
            $_SESSION['usenrame'] = $name;
            $_SESSION['type'] = "user";
         }
        else if ($type == "admin"){
            echo json_encode($type); 
            $_SESSION["username"] = $name;
            $_SESSION["type"] = "admin";
        }
    }
    else {
        //some code 
        echo  json_encode(password_verify($pass,$password)); 
    }
}else
{ die("incorrect");
    # code...
}
    
?>

