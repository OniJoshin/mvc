<?php
    require_once 'config/config.php';


    // Auto load core libraries
    spl_autoload_register(function($classname){
        require_once 'libraries/' . $classname . '.php';
    });