<?php
session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
echo $username;
// $query = mysqli_query($connect, "SELECT * FROM account WHERE username='$username' AND password=md5('$password')");
$query = mysqli_query($connect, "SELECT * FROM account WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
    $_SESSION['username'] = $data['username'];
    header("Location: index.php");
} else {
    $_SESSION['login_gagal'] = "Username dan password salah";
    header("Location: login.php");
}
