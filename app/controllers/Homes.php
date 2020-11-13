<?php
    class Homes extends Controller{
        public function __construct(){
            
        }

        public function index() {
            $data = [
                'header' => true,
                'footer' => true,
                'title' => 'Home'
            ];
            $model_home = $this->model('home');

            $data['meta_data'] = $model_home->getMeta()->row;
            
            $this->view('home/main', $data);
            
        }
    }