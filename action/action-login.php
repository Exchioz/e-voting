<?php
$emaillogin = 'ivannnaufal@gmail.com';
$tokenlogin = '2002891';

session_start();

$email = $_POST['email'];
$token = $_POST['token'];

if ($email == $emaillogin && $token == $tokenlogin) {
    session_start();
    $_SESSION['email'] = $email;
    header("Location: ../index.php");
} else {
    header("Location: login.php?status=gagal");
}
