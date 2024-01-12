<?php
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



