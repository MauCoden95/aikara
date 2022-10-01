<?php
    require_once 'Config/Database.php';

    class Usuario{
        private $id;
        private $username;
        private $name;
        private $dni;
        private $address;
        private $city;
        private $phone;
        private $password;
        private $db;

        //CONSTRUCTOR
        public function __construct(){
            $this->db = Database::connect();
        }


        //GETTERS
        public function getId() {
            return $this->id;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getName() {
            return $this->name;
        }

        public function getDni() {
            return $this->dni;
        }

        public function getAddress() {
            return $this->address;
        }

        public function getCity() {
            return $this->city;
        }

        public function getPhone() {
            return $this->phone;
        }

        public function getPassword() {
            return $this->password;
        }



        //SETTERS
        public function setId($id): void {
            $this->id = $id;
        }

        public function setUsername($username): void {
            $this->username = $username;
        }

        public function setName($name): void {
            $this->name = $name;
        }

        public function setDni($dni): void {
            $this->dni = $dni;
        }

        public function setAddress($address): void {
            $this->address = $address;
        }

        public function setCity($city): void {
            $this->city = $city;
        }

        public function setPhone($phone): void {
            $this->phone = $phone;
        }

        public function setPassword($password): void {
            $this->password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        }


        public function add(){
            $sql = "INSERT INTO users VALUES(NULL,'{$this->getUsername()}','{$this->getName()}',{$this->getDni()},'{$this->getAddress()}','{$this->getCity()}',{$this->getPhone()},'{$this->getPassword()}')";
            $save = $this->db->query($sql);

            $result = false;

            if ($save) {
                $result = true;
            }

            return $result;
        }
    }



?>