<?php

$username = trim(htmlspecialchars($_POST['user']));
$password = trim(htmlspecialchars($_POST['pass']));

$password = password_hash($password, PASSWORD_BCRYPT);

$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

$query = $db->prepare("INSERT INTO users (username, password) VALUES ('$username', '$password')");

echo $query->execute();