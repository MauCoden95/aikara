<?php
    require_once 'Config/Database.php';

    class Comida{
        private $id;
        private $description;
        private $price;
        private $imagen;
        private $db;

        public function __construct(){
            $this->db = Database::connect();
        }



        //GETTERS
        public function getId() {
            return $this->id;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getImagen() {
            return $this->imagen;
        }

        public function getDb() {
            return $this->db;
        }



        //SETTERS
        public function setId($id): void {
            $this->id = $id;
        }

        public function setDescription($description): void {
            $this->description = $description;
        }

        public function setPrice($price): void {
            $this->price = $price;
        }

        public function setImagen($imagen): void {
            $this->imagen = $imagen;
        }

        public function setDb($db): void {
            $this->db = $db;
        }




        //METODOS
        public function menu(){
            $foods = $this->db->query("SELECT * FROM foods");

            return $foods;
        }

    }



?>