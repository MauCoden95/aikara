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
    }




?>