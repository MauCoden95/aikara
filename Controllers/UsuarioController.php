<?php
    require_once 'Models/Usuario.php';
    

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
            if($_POST){
                //Identificar al usuario
                //Consulta a la bbdd 
                $user = new Usuario();
                $user->setUsername($_POST['user']);
                $user->setPassword($_POST['password']);
                $identity = $user->login();

                if ($identity) {
                    $_SESSION['identity'] = $identity;
                    unset($_SESSION['error_login']);
                   
                }else{
                    $_SESSION['error_login'] = true;
                }

                
                //Crear una sesion
            }

            header('Location: http://localhost/Aikara/Comida/Index');
        }


        public function logout(){
            session_destroy();
            header('Location: http://localhost/Aikara/Comida/Index');
        }

        public function update(){
            require_once 'Views/Usuario/Configuracion.php';
        }

        public function settings(){
            if ($_POST) {
                $id = $_POST['id'];
                $username = $_POST['username'];
                $name = $_POST['name'];
                $dni = $_POST['dni'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];

                $user = new Usuario();
                $user->setId($id);
                $user->setUsername($username);
                $user->setName($name);
                $user->setDni($dni);
                $user->setAddress($address);
                $user->setCity($city);
                $user->setPhone($phone);
                $user->setPassword($password);

                $update = $user->update();

                if ($update) {
                    $_SESSION['update_user'] = "Complete";
                }else{
                    $_SESSION['update_user'] = "Failed";
                }
            }


            header('Location: http://localhost/Aikara/Usuario/update');
        }
    }



?>