<?php 
require_once 'config/connectdb.php';

$siteName     = $_POST['siteName'];
$siteDesc     = $_POST['siteDesc'];
$sitePhoto    =  $_FILES['sitePhoto']['tmp_name'];
$siteImageContent = file_get_contents($sitePhoto);

try {
    
    $sql = "INSERT INTO sites (site_name, site_description, site_photo) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $siteName);
    $stmt->bindParam(2, $siteDesc);
    $stmt->bindParam(3, $siteImageContent, PDO::PARAM_LOB);

    $stmt->execute();

    echo "Дані успішно вставлені в таблицю workers.";
} catch (PDOException $e) {
    echo "Помилка: " . $e->getMessage();
}

$pdo = null;