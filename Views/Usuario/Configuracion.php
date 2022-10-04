<section id="register">
    <h1>Actualizar mis datos</h1>
    <form action="<?= base_url ?>/Usuario/settings" method="post">
        <?php if(isset($_SESSION['update_user']) && $_SESSION['update_user'] == "Complete"): ?>
            <div class="success">
                <p>Datos actualizados con exito!!!</p>
            </div>
        <?php elseif(isset($_SESSION['update_user']) && $_SESSION['update_user'] == "Failed"): ?>
            <div class="error">
                <p>Hubo un error al actualizar los datos</p>
            </div>
        <?php endif; ?>
        <input class="input-hidden" type="text" name="id" value="<?= $_SESSION['identity']->id ?>" autocomplete="off">
        <input type="text" name="name" value="<?= $_SESSION['identity']->name ?>" autocomplete="off">
        <input type="number" name="dni" value="<?= $_SESSION['identity']->dni ?>" autocomplete="off">
        <input type="text" name="address" value="<?= $_SESSION['identity']->address ?>" autocomplete="off">
        <input type="text" name="city" value="<?= $_SESSION['identity']->city ?>" autocomplete="off">
        <input type="number" name="phone" value="<?= $_SESSION['identity']->phone ?>" autocomplete="off">
        <input type="text" name="username" value="<?= $_SESSION['identity']->username ?>" autocomplete="off">
        <input type="password" name="password" placeholder="Contraseña" autocomplete="off">
        <input type="submit" value="Actualizar">
    </form>



    <h1>Borrar mi cuenta</h1>
    <form action="<?= base_url ?>/Usuario/delete" method="post">
        <?php if(isset($_SESSION['delete_user_error'])): ?>
            <div class="error">
                <?php print_r($_SESSION['delete_user_error']); ?>
            </div>
        <?php endif; ?>
       
        <input class="input-hidden" type="text" name="id" value="<?= $_SESSION['identity']->id ?>" autocomplete="off">
        <input type="password" name="password1" placeholder="Contraseña" autocomplete="off">
        <input type="password" name="password2" placeholder="Confirme contraseña" autocomplete="off">
        <input type="submit" value="Eliminar">
    </form>
</section>