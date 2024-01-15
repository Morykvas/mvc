<?php 
/**
 * сторінка  де ми показуємо наших працівників 
 * ми отримуємо дані з контролера методу aboutUs
 */
define('CSS_DIR', '../'); 
include_once '../header.php'; 
?> 
<div class="container">
    <h2>ABOUT US</h2>
    <div class="wrapper-content-cards">
        <div class="wrapper-cards">
        <?php foreach ($workers as $worker) : ?>
            <div class="wrapper-card">
                    <div class="item-image-card">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($worker['photo']);?>" />
                    </div>
                    <div class="item-desc">
                    <span>Ім'я:</span><p><?= $worker['name'] ?></p>
                    </div>
                    <div class="item-desc">
                    <span>Вік:</span><p><?= $worker['age'] ?></p>
                    </div>
                    <div class="item-desc">
                    <span>Досвід:</span><p><?= $worker['experience'] ?></p>
                    </div>
                </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include_once '../footer.php'; ?> 
