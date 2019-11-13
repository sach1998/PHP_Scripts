<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organisation";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE employee (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone VARCHAR(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table employee created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>