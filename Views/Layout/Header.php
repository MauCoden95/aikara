<?php
    require_once 'Config/Parameters.php';
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url ?>Assets/Css/Styles.css">
    <script src="https://kit.fontawesome.com/7483adbd94.js" crossorigin="anonymous"></script>
    <title>Aikara :: Cocina Japonesa</title>
</head>
<body>
    <header id="header">
        <div class="center">
            <a href="Index.php"><img src="<?= base_url ?>/Assets/Img/Logo.png" alt="Logo"></a>

            <nav id="navbar">
                <ul>
                    <li><a href="<?= base_url ?>/Comida/Index">Inicio</a></li>
                    <li><a href="#about">Sobre Nosotros</a></li>
                    <li><a href="">Menu</a></li>
                    <li><a href="">Ordenes</a></li>
                    <li><a href="#info">Contacto</a></li>
                </ul>
            </nav>

           
            <?php if(isset($_SESSION['identity'])) : ?>
                <button class="login login-no-active"><?= $_SESSION['identity']->username; ?><i class="fas fa-user"></i></button>
                
            <?php else: ?>
                <button class="login login-no-active">Login<i class="fas fa-user"></i></button>
            <?php endif; ?>

            
            <form action="http://localhost/Aikara/Usuario/login" method="post" class="form-login no-active">
                <?php if(isset($_SESSION['error_login'])) : ?>
                    <div class="error">
                        <p>Error en el login</p>
                    </div>
                <?php endif; ?>

                
                <input type="text" name="user" placeholder="Usuario" autocomplete="off">
                <input type="password" name="password" placeholder="Contraseña">
                <input type="submit" value="Ingresar">
                <a href="<?= base_url ?>/Usuario/registro">Registrarse</a>
                <a href="#">Recuperar contraseña</a>
            </form>
        </div>
       
    </header>