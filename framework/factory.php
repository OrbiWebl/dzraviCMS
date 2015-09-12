<?php

class WLfactory {

    public function getPage($controller, $method = 'index') {

        if (empty($controller)) {
            $controller = MAIN_CONTROLLER;
        }

        $myTemplate = PATH_ROOT.'/template/test/index.php';
   
        if (file_exists(PATH_FRAMEWORK.'/controllers/' . $controller . '.php')) {

            if (file_exists($myTemplate)) {
                
                ob_start();
                include $myTemplate;
                $Template = ob_get_contents();
                ob_end_clean();
              
                require PATH_FRAMEWORK.'/controllers/' . $controller . '.php';
                $CON = new $controller();

                if (method_exists($CON, $method)) {
                    $myController = $CON->$method();
                } else {
                    $myController = $CON->index();
                }
                
            echo str_replace('{{WLCONTROLLER}}', $myController, $Template);
                
            } else {
                include_once 'controllers/error.php';
            }
        } else {
            include_once 'controllers/error.php';
        }
    }

}