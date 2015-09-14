<?php
require_once PATH_FRAMEWORK .'/legacy/WL_Controller.php';

class main extends WL_Controller{
    

    public function index(){
        $model = $this->getModel();
        $data = $model->getData();
        
        $v = $this->getView($data);
        return $v;
    }
}