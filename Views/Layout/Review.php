<section id="section-review">
    <h1>Dejar reseña</h1>
    <div class="form-div">
        <form action="<?= base_url ?>/Resena/save" method="post">
            <?php if(isset($_SESSION['review']) && $_SESSION['review'] == 'Complete') : ?>
                <div class="success">
                    Reseña guardada con exito!!!
                </div>
            <?php elseif(isset($_SESSION['review']) && $_SESSION['review'] == 'Failed') : ?>
                <div class="error">
                    Hubo un error al guardar la reseña
                </div>
            <?php endif; ?>
            <h3><span class="range-value">1</span>  Estrellas</h3>
            <p>-Solo se permite una reseña por usuario-</p>
            <input class="range" type="range" min="1" max="5" name="stars">
            <textarea name="review"></textarea>
            <input type="submit" value="Guardar">
        </form>
    </div>
</section>