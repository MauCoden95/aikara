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
    <link rel="shortcut icon" href="<?= base_url ?>/Assets/Img/Logo.png" type="image/x-icon">

    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/7483adbd94.js" crossorigin="anonymous"></script>

    
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>Aikara :: Cocina Japonesa</title>
</head>
<body>
    <header id="header">
        <div class="center">
            <a href="<?= base_url ?>/Comida/index"><img src="<?= base_url ?>/Assets/Img/Logo.png" alt="Logo"></a>

            <nav id="navbar">
                <ul>
                    <li><a href="<?= base_url ?>/Comida/index">Inicio</a></li>
                    <li><a href="<?= base_url ?>/Pagina/about">Sobre Nosotros</a></li>
                    <li><a href="<?= base_url ?>/Comida/menu">Menu</a></li>
                    <li><a href="<?= base_url ?>/Pagina/contact">Contacto</a></li>
                </ul>
            </nav>

            <div class="login-cart">
                <a href="http://localhost/Aikara/Comida/cart">
                    <?php if(isset($_SESSION['cart'])): ?>
                        <i class="cart fas fa-shopping-cart">(<?php echo count($_SESSION['cart']); ?>)</i>
                    <?php else: ?>
                        <i class="cart fas fa-shopping-cart">(0)</i>
                    <?php endif; ?>
                </a>
                <button class="login login-no-active"><i class="fas fa-user"></i></button>
            </div>
           
           

            
            <form action="http://localhost/Aikara/Usuario/login" method="post" class="form-login no-active">
                <?php if(!isset($_SESSION['identity'])) : ?>
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
                <?php else: ?>
                    <p><?= $_SESSION['identity']->username; ?></p>
                    <hr>
                    <a href="#">Mis Pedidos</a>
                    <a href="http://localhost/Aikara/Pagina/Review">Dejar reseña</a>
                    <a href="http://localhost/Aikara/Usuario/update">Configuracion</a>
                    <a href="http://localhost/Aikara/Usuario/logout">Cerrar Sesion</a>                   


                <?php endif; ?>

                
            </form>
        </div>
       
    </header>