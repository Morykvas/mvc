<?php 
   
    include_once '../config/connectdb.php';
    require_once '../controllers/controller.php';
    define('CSS_DIR', '../'); 
    include_once '../header.php';
?>

<div class="container">
    <div class="wrapper-content">
        <h1>Головна сторінка</h1>
        <div class="buttons">
        <button>
        <a href="?action=aboutUs">Про нас</a>
        </button>
        <button>
        <a href="?action=ourSites">Наші сайти</a>
        </button>
        </div>
    </div>
    <div class="wrapper-form">
  
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Наші працівники</h3>
        <input type="text" name="name" placeholder="Імя"><br>

        <input type="number" name="age" placeholder="Вік"><br>

        <input type="text" name="experience" placeholder="Досвід роботи"><br>

        
        <input type="file" name="photo" accept="image/*" ><br>

        <input type="submit" value="Відправити">
    </form>
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Наші сайти</h3>
        <input type="text" name="siteName" placeholder="Назва сайту"><br>

    
        <input type="text" name="siteDesc" placeholder="Опис"><br>

     
        <input type="file" name="sitePhoto" accept="image/*" required><br>

        <input type="submit" value="Відправити">
    </form>

    </div>
</div>

<?php include_once '../footer.php'; ?>

