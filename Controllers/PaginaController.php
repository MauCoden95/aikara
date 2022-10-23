<?php
    class PaginaController{
        public function about(){
            require_once 'Views/Layout/About.php';
        }

        public function contact(){
            require_once 'Views/Layout/Contact.php';
        }

        public function review(){
            require_once 'Views/Layout/Review.php';
        }
    }


?>