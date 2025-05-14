<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "burgerhut";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$pass = $_POST['password'];
$remember = isset($_POST['remember']);

$sql = "SELECT * FROM customer WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($pass, $user['password'])) {
    if ($remember) {
        setcookie("user_email", $user['email'], time() + (86400 * 30), "/"); // 30 days
    } else {
        setcookie("user_email", $user['email'], time() + 86400, "/"); // 1 day
    }

    header("Location: ../index.html");
    exit();
} else {
    echo "<script>alert('Invalid email or password'); window.location.href='index.php';</script>";
}
$conn->close();
?>
