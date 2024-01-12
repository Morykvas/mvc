<?php  

require_once './config/connectdb.php';


$name         = $_POST['name'];
$age          = $_POST['age'];
$experience   = $_POST['experience'];
$img          = $_FILES['photo']['tmp_name'];
$imageContent = file_get_contents($img);




try {
    
    $sql = "INSERT INTO workers (name, age, experience, photo) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $age);
    $stmt->bindParam(3, $experience);
    $stmt->bindParam(4, $imageContent, PDO::PARAM_LOB);

    $stmt->execute();

    echo "Дані успішно вставлені в таблицю workers.";
} catch (PDOException $e) {
    echo "Помилка: " . $e->getMessage();
}

$pdo = null;

