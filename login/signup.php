<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "burgerhut";

// Connect to database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get inputs
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Hash password
$hashedPass = password_hash($pass, PASSWORD_BCRYPT);

// Insert into DB
$sql = "INSERT INTO customer (name, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $hashedPass);

if ($stmt->execute()) {
    echo "<script>alert('Signup successful! Please log in.'); window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Email already registered or error occurred.'); window.location.href='index.php';</script>";
}

$conn->close();
?>
