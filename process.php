<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$userToken = $_POST['userToken'] ?? '';
if ($username === 'admin' && $password === '1234') {
    $_SESSION['user'] = $username;
    $_SESSION['token'] = $userToken;
    header("Location: welcome.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
?>