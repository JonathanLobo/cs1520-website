<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$dbCreate = "CREATE DATABASE IF NOT EXISTS mywebsite";
if ($conn->query($dbCreate) === FALSE) {
    echo "Error creating database: " . $conn->error;
}

// Select database
if ($conn->select_db("mywebsite") === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
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

// Create table
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Insert data into table
if ($conn->query($sql2) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
