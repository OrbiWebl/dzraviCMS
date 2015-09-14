<?php

class WL_Controller extends WLfactory  {

    public $ClassName;

    public function __construct() {
        $this->ClassName = get_called_class();
    }
    
    public function WDB() {
        return $this->getDBL();
    }

    public function getView($view = '', $data = '') {
        if(!$view){
            $view = $this->ClassName;
        }
        
        if (!$view) {
            echo 'View Not Found';
            return false;
        }

        ob_start();
        include(PATH_FRAMEWORK . '/views/' . $view . '.php');
        $Template = ob_get_contents();
        ob_end_clean();

        return $Template;
    }

    public function getModel() {
        $model = $this->ClassName;

        $modelC = $model . '_model';
        if (!$model) {
            echo 'Model Not Found';
            return false;
        }

        require_once PATH_FRAMEWORK . '/models/' . $model . '.php';
        $M = new $modelC();

        return $M;
    }

}
