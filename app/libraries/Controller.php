<?php
    /*
    * Base controller
    * Loads models and views
    */

    class Controller {
        public function model($model){
            require_once '../app/models/'.$model.'.php';

            //Instatiate model
            return new $model();
        }

        public function view($view, $data = []){
            if(file_exists('../app/views/'.$view.'.php')){
                if($data['header'] === true) {
                    require_once '../app/views/inc/header.php';
                }
                
                require_once '../app/views/'.$view.'.php';

                if($data['footer'] === true) {
                    require_once '../app/views/inc/footer.php';
                }
            } else {
                die("View does not exist");
            }
        }
    }