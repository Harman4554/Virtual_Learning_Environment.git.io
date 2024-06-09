<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password !== $password2) {
        $_SESSION['error'] = 'Passwords do not match.';
        header('online.html');
        exit;
    }
    $_SESSION['success'] = 'Registration successful! Please log in.';
    header('Location: login.php');
    exit;
}
?>