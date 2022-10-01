<?php
    

?>

<section id="register">
    <h1>Registro</h1>
    <form action="<?= base_url ?>/Usuario/add" method="post">
        <?php if(isset($_SESSION['register_complete'])): ?>
            <div class="success">
                <?php print_r($_SESSION['register_complete']); ?>
            </div>
        <?php elseif(isset($_SESSION['register_failed'])): ?>
            <div class="error">
                <?php print_r($_SESSION['register_failed']); ?>
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
