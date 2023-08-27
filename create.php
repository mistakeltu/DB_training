<?php

$host = '127.0.0.1';
$db   = 'iguanos';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);


$sql = "
    INSERT INTO trees (`title`, `height`, `type`)
    VALUES ('" . $_POST['title'] . "', " . $_POST['height'] . ", " . $_POST['type'] . ") 
";

$stmt = $pdo->query($sql);

header('Location: http://localhost/DB_training/');
