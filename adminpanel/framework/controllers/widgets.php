<?php

require_once PATH_FRAMEWORK . '/legacy/WL_Controller.php';

class widgets extends WL_Controller {

    public function index() {

        $user = (isset($_SESSION['user']) && !empty($_SESSION['user'])) ? $_SESSION['user'] : '';

        if ($user) {
            $model = $this->getModel();
            $data['components'] = $model->getComponents();
            $data['view'] = 'widgets';
            $data['data'] = $this->getList();
            $v = $this->getView('index', $data);
        } else {
           
            $v = $this->getView('main');
        }

        return $v;
    }

    private function getList() {
        $post = $_POST;

        $model = $this->getModel();
        $data = $model->getList();
        
        return $data;
        
    }

}