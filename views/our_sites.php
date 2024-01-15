<?php 
/**
 * сторінка де ми показуємо наші роботи(сайти) 
 * отримуємо дані з контролера методу  ourSites
 */
define('CSS_DIR', '../'); 
include_once '../header.php';
?>
 <div class="container">
    <h2>OUR SITES</h2>
    <div class="wrapper-content-cards">
        <div class="wrapper-cards">
        <?php foreach ($sites as $site) : ?>
            <div class="wrapper-card">
                    <div class="item-image-card">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($site['site_photo']);?>" />
                    </div>
                    <div class="item-desc">
                    <span>Назва:</span><p><?= $site['site_name'] ?></p>
                    </div>
                    <div class="item-desc">
                    <span>Опис:</span><p><?= $site['site_description'] ?></p>
                    </div>
                </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include_once '../footer.php'; ?>