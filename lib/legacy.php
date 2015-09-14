<?php

class Legacy {

    public $DBL;

    public function __construct() {
       // require_once PATH_ROOT . '/lib/db.php';
        $this->DBL = DB::checkConn();
    }

    public function getDBL() {
        return $this->DBL;
    }
    
   public function getPage($controller, $method = 'index') {

        if (empty($controller)) {
            $controller = MAIN_CONTROLLER;
        }

        $myTemplate = PATH_ROOT . '/template/test/index.php';

        if (file_exists(PATH_FRAMEWORK . '/controllers/' . $controller . '.php')) {

            if (file_exists($myTemplate)) {

                $dbl = $this->DBL;
                ob_start();
                include $myTemplate;
                $Template = ob_get_contents();
                ob_end_clean();

                echo $Template;
            } else {
                include_once 'controllers/error.php';
            }
        } else {
            include_once 'controllers/error.php';
        }
    }

}
