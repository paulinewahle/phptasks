<?php
require_once "connection.php";

//Get post data
$title = $_POST["title"];
$description = $_POST["description"];

//send data to DB
$query = "INSERT INTO tasks (title, description) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $title, $description);

$success = $stmt->execute();

if($success){
  header("location: index.php");
}
else{
   
}
?>
