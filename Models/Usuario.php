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

        

        public function login($username,$password){
            $result = false;
            

            //Comprobar si existe el usuario
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $login = $this->db->query($sql);

            

            if ($login && $login->num_rows == 1) {
                $usuario = $login->fetch_object();

               
                
                $verify = password_verify($password, $usuario->password);

                if ($verify) {
                    $result = $usuario;
                }
                      


            }
            return $result;            

        }



        

        public function update(){
                $result = false;

                $sql = "UPDATE users SET username = '{$this->getUsername()}', name = '{$this->getName()}', dni = {$this->getDni()}, address = '{$this->getAddress()}', city = '{$this->getCity()}', phone = {$this->getPhone()}, password = '{$this->getPassword()}' WHERE id = {$this->getId()}";

                $query = $this->db->query($sql);

               

                if ($query) {
                    $result = true;
                }
                
            return $result;

        }


        public function delete(){
            $result = false;

            $sql = "DELETE FROM users WHERE id = {$this->getId()}";
            $delete = $this->db->query($sql);

            if ($delete) {
                $result = true;
            }

            

            return $result;
        }
    }



?>