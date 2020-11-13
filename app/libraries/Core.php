<?php
    /*
    * App Core Class
    * Creates URL & loads core controller
    * URL Format - /controller/function/params
    */

    class Core {
        protected $currentController = 'homes';
        protected $currentFunction = 'index';
        protected $params = [];

        public function __construct(){
            $url = $this->getUrl();

            // Find controller for url index 0
            if(isset($url[0]) && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
                // Set to current controller
                $this->currentController = ucwords($url[0]);
                // unset 0 index.
                unset($url[0]);
            }
            // Require the controller
            require_once '../app/controllers/' . $this->currentController . '.php';

            // Instantiate controller class
            $this->currentController = new $this->currentController;

            // Check for second index of url
            if(isset($url[1])){
                // Check if function exists
                if(method_exists($this->currentController, $url[1])){
                    $this->currentFunction = $url[1];
                    unset($url[1]);
                }
            }

            // Get params
            $this->params = $url ? array_values($url) : [];

            // Call a callback of array params
            call_user_func_array([$this->currentController, $this->currentFunction], $this->params);
        }

        public function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }