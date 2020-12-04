<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }

  $fname= $_POST['firstname'] ?? 'default';
  $lname= $_POST['lastname'] ?? 'default';
  $email= $_POST['email'] ?? 'default';
  $pass= $_POST['password'] ?? 'default';
  $username= $_POST['username'] ?? 'default';

  $sql="SELECT  email , password, type FROM users WHERE email  = ?";

  
$stmt = $conn->prepare($sql);

$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();
$user='user';
if (!($stmt->num_rows > 0)) {

  $sql="SELECT  email , password, type FROM users WHERE username  = ?";
  $stmt = $conn->prepare($sql);

  $stmt->bind_param('s', $username);
  $stmt->execute();
  $stmt->store_result();

  if (!($stmt->num_rows > 0)) {

  $sql='INSERT INTO users ( password,email,username,type,firstname, lastname) VALUES (?, ?, ?, ?, ?, ?)';
  $stmt = $conn->prepare($sql);
  $pass=password_hash($pass,PASSWORD_DEFAULT);
  $stmt->bind_param('ssssss',  $pass,$email,$username,$user,$fname, $lname );
  $stmt->execute();
      $stmt->close();
      header("Content-type: application/json");
      echo json_encode("ok"); 
  }else{
    header("Content-type: application/json");
  echo json_encode("usernametaken"); 
  }
			


}else{
  header("Content-type: application/json");
  echo json_encode("idtaken"); 
}

?>