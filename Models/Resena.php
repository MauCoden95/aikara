<?php
    require_once 'Config/Database.php';

    class Resena{
        private $id;
        private $user_id;
        private $stars;
        private $review;
        private $db;



        //CONSTRUCTOR
        public function __construct(){
            $this->db = Database::connect();
        }




        //GETTERS
        public function getId() {
            return $this->id;
        }

        public function getUser_id() {
            return $this->user_id;
        }

        public function getStars() {
            return $this->stars;
        }

        public function getReview() {
            return $this->review;
        }




        //SETTERS
        public function setId($id): void {
            $this->id = $id;
        }

        public function setUser_id($user_id): void {
            $this->user_id = $user_id;
        }

        public function setStars($stars): void {
            $this->stars = $stars;
        }

        public function setReview($review): void {
            $this->review = $review;
        }




        //METODOS
        public function add($id_user){
            $result = false;
            $sql = "INSERT INTO reviews VALUES(NULL,$id_user,{$this->getStars()},'{$this->getReview()}');";

            $save = $this->db->query($sql);

           

            if ($save) {
                $result = true;
            }


            return $result;
        }

        public function list(){
            $reviews = $this->db->query("SELECT * FROM reviews");

            return $reviews;
        }

        

    }



?>