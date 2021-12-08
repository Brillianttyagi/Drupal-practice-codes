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
echo "Connected successfully";
$t = $_POST["title"];
$c = $_POST["content"];
$sql = "INSERT INTO blogs (title, content) VALUES ('$t', '$c')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>