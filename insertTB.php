<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organisation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO employee (firstname, lastname, email, phone)
VALUES ('Ashok', 'Raj', 'ashok@something.com', 9972144575)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>