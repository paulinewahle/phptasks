<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo_application";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

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
