<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organisation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, phone FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
            </tr>
        </table>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["firstname"]."</td>
            <td>".$row["lastname"]."</td>
            <td>".$row["phone"]."</td>
        </tr>";
       }
} else {
    echo "0 results";
}
$conn->close();
?>