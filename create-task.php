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
//var_dump($_POST);
$task = $_POST["task"];
$describtion = $_POST["describtion"];
echo "{task} {describtion}"

//send data to DB
$query = "INSERT INTO tasks (task, desctibtion) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $task, $describtion);

$success = stmt->execute();

//Redirect user to index.php
if($success){
    echo "success";
    header("location: index.php")
}
else{
    echo "error";
}

?>
