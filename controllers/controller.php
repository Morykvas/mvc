<?php
require_once '../models/models.php';

class Controller {
    private $workersModel;
    private $sitesModel;

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
}



$controller = new Controller();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
   
    if ($action === 'ourSites' || $action === 'aboutUs') {
       
        $controller->$action();
        
    }
}

















?>
