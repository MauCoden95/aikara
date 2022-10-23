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
            <h3><?= $foo->price ?> $  <a href="#">Añadir al carrito</a></h3>
        </div>
    <?php endwhile; ?>
</div>