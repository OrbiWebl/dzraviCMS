<?php

class WLfactory {

    public function getPage($controller, $method = 'index') {
        if (empty($controller)) {
            $controller = MAIN_CONTROLLER;
        }

        if (file_exists('controllers/' . $controller . '.php')) {
            require 'controllers/' . $controller . '.php';
            $CON = new $controller;
            
            if(method_exists($CON, $method)){
                $CON->$method();
            }
            else{
                $CON->index();
            }
            
        } else {
            include_once 'controllers/error.php';
        }
    }

}