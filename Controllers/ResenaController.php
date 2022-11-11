<?php
    require_once 'Models/Resena.php';
    

    class ResenaController{
        public function save_review(){
            require_once 'Views/Pagina/Review.php';
        }

        public function save(){
            if ($_POST) {
                $usuario_id = $_SESSION['identity']->id;
                //var_dump($usuario_id);
                
                
                $stars = $_POST['stars'];
                $rev = $_POST['review'];

                

                $review = new Resena();
                $review->setStars($stars);
                $review->setReview($rev);

              

                $save_review = $review->add($usuario_id);


                $error = mysqli_error($save_review);
                var_dump($error);

                if ($save_review) {
                    $_SESSION['review'] = "Complete";
                }else{
                    $_SESSION['review'] = "Failed";
                }

                header('Location: http://localhost/Aikara/Pagina/Review');
            }


            header('Location: http://localhost/Aikara/Pagina/Review');
        }


        // public function list(){
        //     $resena = new Resena();

        //     require_once('http://localhost/Aikara/Index.php');
        // }


    }



?>