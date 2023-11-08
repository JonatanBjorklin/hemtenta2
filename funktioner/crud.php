<!-- Gör db -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "crud_app";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "CREATE DATABASE IF NOT EXISTS crud_app";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

//  $sql = "CREATE TABLE IF NOT EXISTS Products (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    `name` VARCHAR(30) NOT NULL,
//     `description` VARCHAR(30) NOT NULL,
//     price VARCHAR(50),
//     `image` VARCHAR(100)
//     )";
//     if ($conn->query($sql) === TRUE) {
//       echo "Table Products created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }

$conn = null;
?>