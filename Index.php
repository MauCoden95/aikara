<?php 
    session_start();
    require_once './Views/Layout/Header.php';
    require_once './Autoload.php';

    if ($_GET['controller']) {
        $controller = $_GET['controller'].'Controller';

        if ($controller && class_exists($controller)) {
            $controlador = new $controller();

            if ($_GET['action'] && method_exists($controller, $_GET['action'])) {
                $action = $_GET['action'];
                $controlador->$action();
            }
        }
    }

      
?>

    <section id="about">
        <div>
            <img src="<?= base_url ?>/Assets/Img/Logo.png" alt="Logo">
            <div class="info">
                <p>Direccion: Suipacha 2300</p>
                <p>Email: aikara@correo.com</p>
                <p>Telefono: 4417-0041</p>
                <h3>Horarios</h3>
                <p>Lunes a sabados: 08:00 a 23:00</p>
                <p>Domingos y feriados: 11:00 a 19:00</p>                
            </div>
        </div>
    </section>



    


    <section id="info">
        <h2>Contacto</h2>
        <form action="" method="post" class="contact-form">
            <input type="text" name="name" placeholder="Nombre" autocomplete="off">
            <input type="number" name="phone" placeholder="Telefono" autocomplete="off">
            <input type="email" name="email" placeholder="Correo electronico" autocomplete="off">
            <textarea name="message" placeholder="Escriba su mensaje..."></textarea>
            <input type="submit" value="Enviar">
        </form>

        <div class="contact-info">
            <div class="contact-info__item">
                <h3 class="fas fa-at"></h3>
                <p>aikara@gmail.com</p>
            </div>

            <div class="contact-info__item">
                <h3 class="fas fa-phone"></h3>
                <p>4302-0808</p>
            </div>

            <div class="contact-info__item">
                <h3 class="fas fa-map-marker-alt"></h3>
                <p>Brandsen 900 - CABA</p>
            </div>

            <div class="contact-info__item">    
                <h3 class="fas fa-clock"></h3>
                <p>Lun a Sab: 08:00 a 18:00</p>
                <p>Dom: 08:00 a 16:00</p>
            </div>
        </div>
    </section> -->

<?php require_once './Views/Layout/Footer.php'; ?>