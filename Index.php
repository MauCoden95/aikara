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


    <section id="testimony">
        <h2>Reseñas de clientes</h2>
        
        <div class="slider-container active" data-aos="zoom-out">
        
        <div class="slide">
          <i class="fas fa-quote-right icon"></i>
          <div class="item">
            <img src="IMG/PERSONAS/Person1.jpg" alt="">
            <div class="item-info">
              <h3>Lorena</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid ipsum pariatur ullam, autem numquam repellat non atque. Cum, porro dicta doloribus rem animi quae qui, odit sunt molestias perferendis aut.</p>
          
          
        </div>


        
      </div>


      <div class="slider-container">
        <div class="slide">
          <i class="fas fa-quote-right icon"></i>
          <div class="item">
            <img src="IMG/PERSONAS/Person2.jpg" alt="">
            <div class="item-info">
              <h3>Fernando</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid ipsum pariatur ullam, autem numquam repellat non atque. Cum, porro dicta doloribus rem animi quae qui, odit sunt molestias perferendis aut.</p>
        </div>
      </div>


      <div class="slider-container">
        <div class="slide">
          <i class="fas fa-quote-right icon"></i>
          <div class="item">
            <img src="IMG/PERSONAS/Person3.jpg" alt="">
            <div class="item-info">
              <h3>Martina</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid ipsum pariatur ullam, autem numquam repellat non atque. Cum, porro dicta doloribus rem animi quae qui, odit sunt molestias perferendis aut.</p>
        </div>
      </div>






   
      <div id="prev" class="fas fa-chevron-left"></div>
      <div id="next" class="fas fa-chevron-right"></div>
      
    </section>



    


    

<?php require_once 'Views/Layout/Footer.php'; ?>