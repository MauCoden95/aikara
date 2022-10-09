<div id="banner">
            <div>
                <h2>Menú</h2>
            </div>
            
</div>

<div id="foods">
    <?php while ($foo = $foods->fetch_object()) : ?>
        <div class="food-card">
            <img src="<?= base_url ?>/Assets/Img/Comidas/<?= $foo->image ?>" alt="comida">
            <h2><?= $foo->description ?></h2>
            <h2>Precio: <?= $foo->price ?> $</h2>
        </div>
    <?php endwhile; ?>
</div>