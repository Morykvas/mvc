<?php  require_once 'header.php'; ?>

<h1>Наші працівники</h1>
    <form action="form-worker.php" method="post" enctype="multipart/form-data">
        
        <input type="text" name="name" placeholder="Імя"><br>

        <input type="number" name="age" placeholder="Вік"><br>

        <input type="text" name="experience" placeholder="Досвід роботи"><br>

        
        <input type="file" name="photo" accept="image/*" ><br>

        <input type="submit" value="Відправити">
    </form>

    <h1>Наші сайти</h1>
    <form action="form-sites.php" method="post" enctype="multipart/form-data">
       
        <input type="text" name="siteName" placeholder="Назва сайту"><br>

    
        <input type="text" name="siteDesc" placeholder="Опис"><br>

     
        <input type="file" name="sitePhoto" accept="image/*" required><br>

        <input type="submit" value="Відправити">
    </form>
   

