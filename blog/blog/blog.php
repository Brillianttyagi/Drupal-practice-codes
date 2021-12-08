<?php
$servername = "localhost";
$username = "deep";
$password = "Hrhk@9090";
$dbname = "blog";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM blogs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $title = $row["title"];
    $content = $row["content"];
    $id = $row["id"];
    print("
    <div class='blog'>
    <h1>$title</h1>
    <p>$content</p>
    <form action='delete.php' method='POST'>
    <input name = 'id' value=$id hidden>
    <input class='deleteblog'  type='submit' value='Delete'>
    </form>
    </div>
    ");
  }
} else {
  echo "0 results";
}


$conn->close();

?>