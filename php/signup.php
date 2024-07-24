<?php
include 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];

if ($password != $confirm_password) {
    echo "Passwords do not match.";
    exit();
}

$sql = "INSERT INTO users (username, email, password, fullname, phone) VALUES ('$username', '$email', '$password', '$fullname', '$phone')";
if ($conn->query($sql) === TRUE) {
    echo "Signup successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
