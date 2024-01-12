
    <h1>OUR SITES</h1>
    <?php foreach ($sites as $site): ?>
        <div>
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['product_image']);?>" /> 
            <p>Назва сайту: <?= $site['site_name'] ?></p>
            <p>Опис: <?= $site['site_description'] ?></p>
        </div>
    <?php endforeach; ?>

