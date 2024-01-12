


    <h2>ABOUT US</h2>
    <?php foreach ($workers as $worker): ?>
        <div>
            <img src="data:image/jpg;base64, <?php echo base64_encode($worker['photo']);?>" />
            <p>Ім'я: <?= $worker['name'] ?></p>
            <p>Вік: <?= $worker['age'] ?></p>
            <p>Досвід роботи: <?= $worker['experience'] ?> років</p> 
        </div>
    <?php endforeach; ?>
