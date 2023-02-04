<?php
include "connection.php";


// Get post data
$id = $_POST["id"];


// Send post data to DB
$query = "DELETE FROM tasks WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);

$success = $stmt->execute();

if($success){
    header("location: index.php");
}
else{
    echo "Error";
}
