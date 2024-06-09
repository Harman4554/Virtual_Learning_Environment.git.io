<?php
session_start();
$users = [
    'user' => 'test',
    'manager' => 'secret',
    'guest' => 'abc123'
];
header('Location: online.html');  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $users)) {
        if ($users[$username] === $password) {
            // Valid login: Set session variables
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $username;
            
            exit;
        } else {
            $msg = 'You have entered wrong Password';
        }
    } else {
        $msg = 'You have entered wrong username';
    }
}
?>