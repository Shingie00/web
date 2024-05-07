<?php
$servername = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database';

$name = $_POST['name'];
$email = $_POST['email'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === true) {
    echo 'Data saved successfully.';
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>
