<?php
/**
 * файл моделі нашого сайту 
 * тут ми отримуємо дані з таблиць workers та sites 
 * дані з цих таблиць будуть відображатись на сторінках views/about_us.php, our_sites.php
 * в цьому випадку створено два класи WorkersModel, SitesModel де ми робимо вибірку з тбалиць бази даних,
 * після чого ми повертаємо аосоціативний масив з даними таблиць
 */
require_once '../config/connectdb.php';

class WorkersModel {
    public function getWorkers() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM workers");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

class SitesModel {
    public function getSites() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM sites");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

class SetWorkersModel {
    public function setWorkers() {

            
    }
}


?>

