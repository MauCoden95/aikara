<section id="register">
    <h1>Registro</h1>
    <form action="<?= base_url ?>/Usuario/add" method="post">

        <?php if(isset($_SESSION['errors'])) : ?>
            <div class="error">
                <ul>
                    <?php foreach($_SESSION['errors'] as $error) :  ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        <?php else: ?>
            <div class="success">
                <p>El nuevo usuario se registró con exito!!!</p>
            </div>
        <?php endif; ?>
        <input type="text" name="name" placeholder="Nombre completo" autocomplete="off">
        <input type="number" name="dni" placeholder="Dni" autocomplete="off">
        <input type="text" name="address" placeholder="Direccion" autocomplete="off">
        <input type="text" name="city" placeholder="Ciudad" autocomplete="off">
        <input type="number" name="phone" placeholder="Telefono" autocomplete="off">
        <input type="text" name="username" placeholder="Usuario" autocomplete="off">
        <input type="password" name="password" placeholder="Contraseña" autocomplete="off">
        <input type="submit" value="Registrar">
    </form>
</section>

<?php 
    //session_destroy();
?>