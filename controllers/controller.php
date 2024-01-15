<?php
require_once '../models/models.php';
/**
 * файл контролера нашого сайту 
 * у нас є дві приватні моделі які представляють модесь працівників та модель сторінок 
 * $workersModel та $sitesModel 
 * конструктор __construct() викликається автоматично при створенні обєкту класу, його завдання його завдання 
 * ініціалізувати обєкти моделей $workersModel і $sitesModel
 *  
 * метод aboutUs() метод який обробляє запит до сторінки abouy_us.php і отримує дані з моделі, 
 * та включає файл   include '../views/about_us.php' для передачі даних працівників
 * 
 * метод ourSites() метод який обробляє запит до сторінки our_sites.php і отримує дані з моделі, 
 * та включає файл   ../views/our_sites.php  для передачі даних та відображення сайтів
 * 
 * метод handleAction() обробляє динамічного виклику методів на основі параметра $action
 * method_exists($this, $action) ця функція превіряє чи існує метод  $action в поточному обєкті
 */

class Controller {
    private $workersModel;
    private $sitesModel;
    private $setWorkersModel;

    public function __construct() {
        $this->workersModel = new WorkersModel(); 
        $this->sitesModel = new SitesModel();
    }

    public function index() {
        include '../views/index.php';  
    }

    public function aboutUs() {
        $workers = $this->workersModel->getWorkers();
        include '../views/about_us.php';
    }

    public function ourSites() {
        $sites = $this->sitesModel->getSites();
        include '../views/our_sites.php';
    }

    public function handleAction($action) {
        if (method_exists($this, $action)) {
            $this->$action();
        } else {
            include '../views/index.php';
            echo 'такого екшина не має';
        }
    }

}




/**
 * $contriller - створення нового обєкту класу Controller 
 * перевірка $_GET['action'] чи існує екшнин якщо так то цей екшин присвоюється змінній $action
 * потім викликаємо метод  handleAction() обєкта $controller і передається назва методщу ячкий 
 * потрібно викликати
 * відповідно ми попадаємо на сторінку на яку нам потрібн з відображенням тих даних які ми очікуємо 
 * 
 */

$controller = new Controller();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $controller->handleAction($action);
    exit;
}
















?>
