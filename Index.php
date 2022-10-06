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



    


    

<?php require_once './Views/Layout/Footer.php'; ?>