<?php include "template/header.php"; ?>

    <section class="container">
        <?php foreach($results as $result): ?>
            <div class="card">
                <img src="<?php echo $result['image_url']; ?>" alt="">
                <h3><?php echo $result['title']; ?></h3>
                <p><?php echo $result['descricao']; ?></p>
                <button>Saiba mais</button>
            </div>
        <?php endforeach ?>
    </section>


<?php include "template/footer.php"; ?>