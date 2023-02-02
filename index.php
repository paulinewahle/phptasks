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

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="script.js"></script>
    <title>Tasks</title>
</head>
<body>
<svg id="mouseFollow1" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
  <path class="path" fill="#AABBBB" d="M66.7,-23.8C73,-2.3,55.4,24.9,35.1,37C14.8,49.1,-8.3,46.1,-28.2,33C-48.1,19.9,-64.8,-3.3,-59.6,-23.3C-54.4,-43.4,-27.2,-60.2,1.5,-60.7C30.2,-61.2,60.4,-45.3,66.7,-23.8Z" transform="translate(100 100)" />
</svg>
<svg id="mouseFollow2" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
  <path class="path" fill="#EBDFD8" d="M40.6,-13.3C48.5,11,47.8,37.9,34,48.3C20.2,58.7,-6.7,52.5,-26.1,37.9C-45.5,23.4,-57.3,0.5,-51.7,-20.8C-46.1,-42,-23.1,-61.5,-3.3,-60.4C16.4,-59.3,32.7,-37.6,40.6,-13.3Z" transform="translate(100 100)" />
</svg>
<!-- 
<svg id="mouseFollow3" viewBox="0 0 200 300" xmlns="http://www.w3.org/2000/svg">
  <path class="path" fill="#5A7069" d="M43,-46.6C53.8,-32.3,59.2,-16.1,58,-1.1C56.9,13.9,49.3,27.8,38.6,36.2C27.8,44.6,13.9,47.4,-3.6,51C-21.1,54.6,-42.3,59,-51.4,50.6C-60.6,42.3,-57.8,21.1,-54.4,3.4C-50.9,-14.2,-46.8,-28.5,-37.7,-42.8C-28.5,-57.1,-14.2,-71.5,0.9,-72.5C16.1,-73.4,32.3,-60.9,43,-46.6Z" transform="translate(100 100)" />
</svg>
<svg id="mouseFollow4" viewBox="0 0 100 50" xmlns="http://www.w3.org/2000/svg">
  <path class="path" fill="#EF9B80" d="M59.2,-51.4C75.4,-43,86.2,-21.5,82.2,-4C78.2,13.5,59.3,26.9,43.1,38C26.9,49,13.5,57.7,-3.5,61.2C-20.5,64.7,-40.9,63.1,-50.8,52C-60.6,40.9,-59.8,20.5,-57.1,2.7C-54.4,-15.1,-49.8,-30.1,-40,-38.6C-30.1,-47,-15.1,-48.9,3.2,-52.1C21.5,-55.3,43,-59.9,59.2,-51.4Z" transform="translate(100 100)" />
</svg> -->
    <div id="container">
        <h1>ToDo</h1>
        <ul>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<a href='edit-task.php?id={$row["id"]}'> <li> {$row ["id"]} {$row ["title"]} </li> </a>";
            }
          } 
        ?>
        </ul>
        <button id="new-task"> 
            <div class="plus" onclick="revealSubcontainer()"></div> 
        </button>
    </div>
    <div id="subcontainer">
    <form action="create-task.php" method="POST">

        <label for="task">Task:</label><br>
        <input type="text" name="task" value=""><br>

        <label for="desribtion">Describtion:</label><br>
        <input type="text" name="describtion" value=""><br><br>

        <input type="submit" value="Submit">
    </form> 
       
    </div>
    
</body>
</html>
