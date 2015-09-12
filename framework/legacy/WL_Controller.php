<?php

class WL_Controller {

    public $ClassName;

    public function __construct() {
        $this->ClassName = get_called_class();
    }

    public function getView($data = '') {
        $view = $this->ClassName;
        if (!$view) {
            echo 'View Not Found';
            return false;
        }

        echo include(PATH_FRAMEWORK . '/views/' . $view . '.php');
        return false;
    }

    public function getModel() {
        $model = $this->ClassName;
        if (!$model) {
            echo 'Model Not Found';
            return false;
        }

        require PATH_FRAMEWORK . '/models/' . $model . '.php';
        $M = new $model.'_model';
        return $m;
    }

}