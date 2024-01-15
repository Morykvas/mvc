<?php 

$user   = "root";
$pass   = "root";
try {
    $pdo = new PDO('mysql:host=localhost;dbname=company', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Помилка підключення до бази даних: " . $e->getMessage());
}