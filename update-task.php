<?php

require_once "connection.php";

// Get post data
$id = $_POST["id"];
$title = $_POST["title"];
$description = $_POST["description"];
$status = $_POST["status"];

// Send post data to DB
$query = "UPDATE tasks SET title = ?, description = ?, status = ? WHERE id = ?"; 
$stmt = $conn->prepare($query);
$stmt->bind_param("ssii", $title, $description, $status, $id); 

$success = $stmt->execute();

if($success){
    header("location: index.php");
}
else{
    echo "Error";
}
?>