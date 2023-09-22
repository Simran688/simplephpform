<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FORM";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check if the connection was successful
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve the input values from the form

$loginid = $_POST["loginid"];
$password = $_POST["password"];
// Insert the input values into the database
$sql = "INSERT INTO FORM1 (loginid,password)
VALUES ('$loginid', '$password')";
if ($conn->query($sql) === TRUE) {
echo "Record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
// Close the database connection
$conn->close();
?>