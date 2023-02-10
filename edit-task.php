<?php
require_once "connection.php";

// prepare and bind
$stmt = $conn->prepare("SELECT * FROM tasks WHERE id=?");
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();

$result = $stmt->get_result();

$task = $result->fetch_assoc();


$sql = "SELECT * FROM tasks WHERE id=".$_GET["id"];
// $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>
        <?= $task["title"] ?>
        </h1>
        <form action="update-task.php" method="post">
            
            <p>
                <b>Title: </b>
                <input type="text" placeholder="<?= $task["title"] ?>" name="title" value="<?= $task["title"] ?>">
            </p>
            <p>
                <b>Description: </b>
                <input type="text" placeholder="<?= $task["title"] ?>" name="description" value="<?= $task["description"]?>">
            </p>
            <div class="status-field"> 
                <input type="radio" name="status" value="0"> 
                <p>Incomplete</p>
                <input type="radio" name="status" value="1"> 
                <p>Complete</p>
            </div> 

            <input type="hidden" name="id" value="<?= $task["id"] ?>">
            <input type="submit" value="Update">
        </form>
        <form action="delete-task.php" method="post">
            <input type="hidden" name="id" value="<?= $task["id"] ?>">
            <input type="submit" value="Delete Note">
        </form>

    </div>
</body>
</html>
