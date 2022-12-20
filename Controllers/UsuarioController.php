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


                $_SESSION['errors'] = array();

                if ($user->getName() == '' || preg_match("/[0-9]/", $user->getName())) {
                    $_SESSION['errors']['name'] = "El nombre no puede estar vacio o contener numeros";
                }
            
                if ($user->getDni() == '') {
                    $_SESSION['errors']['dni'] = "El dni no puede estar vacio";
                }

                if ($user->getAddress() == '') {
                    $_SESSION['errors']['address'] = "La direccion no puede estar vacia";
                }

                if ($user->getCity() == '' || preg_match("/[0-9]/", $user->getCity())) {
                    $_SESSION['errors']['city'] = "La ciudad no puede estar vacia o contener numeros";
                }

                if ($user->getPhone() == '') {
                    $_SESSION['errors']['phone'] = "El telefono no puede estar vacio";
                }

                if ($user->getUsername() == '') {
                    $_SESSION['errors']['user'] = "El usuario no puede estar vacio";
                }

                if ($user->getPassword() == '' || strlen($user->getPassword()) <= 7) {
                    $_SESSION['errors']['password'] = "La contraseña no puede estar vacia o tener menos de 8 caracteres";
                }

                if (count($_SESSION['errors']) <= 0) {
                    $save =  $user->add();

                    if ($save) {
                        $_SESSION['register'] = "Complete";
                        unset($_SESSION['errors']);
                    }
                }





                
            }

            header('Location: http://localhost/Aikara/Usuario/registro');
        }

       public function login(){


            if(isset($_POST)){
                //Identificar al usuario
                //Consulta a la bbdd 
                $user = new Usuario();
                $user->setUsername($_POST['user']);
                $user->setPassword($_POST['password']);
                $identity = $user->login($_POST['user'],$_POST['password']);

                

                

                if ($identity) {
                    $_SESSION['identity'] = $identity;
                    unset($_SESSION['error_login']);
                   
                }else{
                    $_SESSION['error_login'] = true;
                }

                
                
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
            if (isset($_POST)) {
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


                    $_SESSION['errors_update'] = array();

                    if ($user->getName() == '' || preg_match("/[0-9]/", $user->getName())) {
                        $_SESSION['errors_update']['name'] = "El nombre no puede estar vacio o contener numeros";
                    }
                
                    if ($user->getDni() == '') {
                        $_SESSION['errors_update']['dni'] = "El dni no puede estar vacio";
                    }

                    if ($user->getAddress() == '') {
                        $_SESSION['errors_update']['address'] = "La direccion no puede estar vacia";
                    }

                    if ($user->getCity() == '' || preg_match("/[0-9]/", $user->getCity())) {
                        $_SESSION['errors_update']['city'] = "La ciudad no puede estar vacia o contener numeros";
                    }

                    if ($user->getPhone() == '') {
                        $_SESSION['errors_update']['phone'] = "El telefono no puede estar vacio";
                    }

                    if ($user->getUsername() == '') {
                        $_SESSION['errors_update']['user'] = "El usuario no puede estar vacio";
                    }

                    if ($user->getPassword() == '' || strlen($user->getPassword()) <= 7) {
                        $_SESSION['errors']['password'] = "La contraseña no puede estar vacia o tener menos de 8 caracteres";
                    }


                    

                    
                    


                    if (count($_SESSION['errors_update']) <= 0) {
                        $save =  $user->update();
    
                        if ($save) {
                            $_SESSION['settings'] = "Complete";
                            unset($_SESSION['errors_update']);
                        }
                    }



                   
                

                
            }
    
            
            

            header('Location: http://localhost/Aikara/Usuario/update');
        }



        
        public function delete(){
            if ($_POST) {
                $password1 = $_POST['password1'];
                $password2 = $_POST['password2'];

                
                if ($password1 == $password2) {

                    $user = new Usuario();
                    $user->setId($_SESSION['identity']->id);

                    var_dump($user);
                    die();
                    $verify = password_verify($password1, $user->getPassword());

                    if ($verify) {
                        $delete = $user->delete();

                        if ($delete) {
                            header('Location: http://localhost/Aikara/Comida/index');
                        }else{
                            header('Location: http://localhost/Aikara/Usuario/update');
                            $_SESSION['delete_user_error'] = "Hubo un error al eliminar tu cuenta";
                        }
                    }else{
                        $_SESSION['delete_user_error'] = "Error, campos vacíos o contraseña inexistente";
                    }
                }else{
                    $_SESSION['delete_user_error'] = "Error, las contraseñas no coinciden";
                }
            }

            header('Location: http://localhost/Aikara/Comida/Index');
        }
    }



?>