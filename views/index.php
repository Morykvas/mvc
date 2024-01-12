<?php 
   
    include_once '../config/connectdb.php';
    require_once '../controllers/controller.php';
    include_once '../header.php';
?>


<h1>Головна сторінка</h1>
<button>
<a href="?action=aboutUs">Про нас</a>
</button>
<button>
<a href="?action=ourSites">Наші сайти</a>
</button>


<?php include_once '../footer.php'; ?>

