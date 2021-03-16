<?php

$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

$query = $db->prepare("SELECT * FROM users");

$query->execute();

$result = $query->fetchAll();

echo json_encode($result);
