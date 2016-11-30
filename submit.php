<?php
$servername = "localhost";
$username = "jlobo";
$password = "password";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$sql = "CREATE TABLE IF NOT EXISTS comments (
  id mediumint(9) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Date datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  Name char(255) NOT NULL DEFAULT '',
  Email char(255) DEFAULT NULL,
  Comments text
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

$sql2 = "INSERT INTO comments (Name, Email, Comments)
VALUES ('$name', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
