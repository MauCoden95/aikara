<div id="banner">
            <div>
                <h2>Menú</h2>
            </div>
            
</div>

<div id="foods">
    <?php while ($foo = $foods->fetch_object()) : ?>
        <div class="food-card">
            <img src="<?= base_url ?>/Assets/Img/Comidas/<?= $foo->image ?>" alt="comida">
            <form action="http://localhost/Aikara/Comida/addCart" method="post">
                <input class="input-description" type="text" name="description" value="<?= $foo->description ?>" readonly>
                <h3><?= $foo->price ?> $ <button type="submit" href="#"><i class="fas fa-shopping-cart"></i></button> <input class="input-quantity" type="number" name="quantity" min="1" value="1"></h3>
                
            </form>
        </div>
    <?php endwhile; ?>
</div>