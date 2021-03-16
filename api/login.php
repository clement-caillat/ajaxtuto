<?php
session_start();

$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

$username = trim(htmlspecialchars($_POST['user']));
$password = trim(htmlspecialchars($_POST['pass']));


$query = $db->prepare("SELECT password FROM users WHERE username = '$username'");
$query->execute();

$result = $query->fetch(PDO::FETCH_OBJ);

$cryptedpass = $result->password;

if (password_verify($password, $cryptedpass)) {
    
    
    $query = $db->prepare("SELECT username FROM users WHERE username = '$username'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);

    $_SESSION['username'] = $result->username;

    echo true;
}
else {
    echo false;
}