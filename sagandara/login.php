<?php
session_start();

// Username dan password default
$valid_username = "admin";
$valid_password = "1234";

// Cek apakah form sudah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek kredensial login
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<script>alert('Invalid username or password!'); window.location.href='login.html';</script>";
    }
}
?>
