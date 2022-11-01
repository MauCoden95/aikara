<?php
    require_once 'Models/Comida.php';

    class ComidaController{
        public function index(){
            require_once 'Views/Comida/Index.php';
        }

        public function menu(){
            $food = new Comida();
            $foods = $food->menu();

            require_once 'Views/Comida/Menu.php';
        }

        public function addCart(){
            if (isset($_SESSION['identity'])) {
                if (isset($_SESSION['cart'])) {
                    $my_cart = $_SESSION['cart'];
            
                    if (isset($_POST['description'])) {
                        $description = $_POST['description'];
                        $quantity = $_POST['quantity'];
                        $num = 0;
                        $my_cart[] = array('description' => $description, 'quantity' => $quantity);
                    }
                }else{
                        $description = $_POST['description'];
                        $quantity = $_POST['quantity'];
                        $my_cart[] = array('description' => $description, 'quantity' => $quantity);
                }
            
                $_SESSION['cart'] = $my_cart;
    
                header('Location: http://localhost/Aikara/Comida/menu');
    
            }else{
                header('Location: http://localhost/Aikara/Comida/Cart');
            }


                   
           
        }

        public function cart(){
            require_once 'Views/Comida/Cart.php';
        }

        public function clearCart(){
            if (isset($_SESSION['cart'])) {
                unset($_SESSION['cart']);
            }
           
            header('Location: http://localhost/Aikara/Comida/menu');
        }
    }




?>