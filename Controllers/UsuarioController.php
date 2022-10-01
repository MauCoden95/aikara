<?php
    require_once 'Models/Usuario.php';
    session_start();

    class UsuarioController{
        public function registro(){
            require_once 'Views/Usuario/Registrar.php';
        }

        public function add(){
            if (isset($_POST)) {
                $username = $_POST['username'];
                $name = $_POST['name'];
                $dni = $_POST['dni'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];

                $user = new Usuario();
                $user->setUsername($username);
                $user->setName($name);
                $user->setDni($dni);
                $user->setAddress($address);
                $user->setCity($city);
                $user->setPhone($phone);
                $user->setPassword($password);

                $save =  $user->add();

                if ($save) {
                    $_SESSION['register'] = "Complete";
                }else{
                    $_SESSION['register'] = "Failed";
                }
            }

            header('Location: http://localhost/Aikara/Usuario/registro');
        }

        public function login(){
            
        }
    }



?>