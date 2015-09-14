<?php

require_once PATH_FRAMEWORK . '/legacy/WL_Controller.php';

class main extends WL_Controller {

    public function index() {

        $user = (isset($_SESSION['user']) && !empty($_SESSION['user'])) ? $_SESSION['user'] : '';

        if ($user) {
             $model = $this->getModel();
            $data['components'] = $model->getComponents();
            $v = $this->getView('index',$data);
        } else {
           
            $v = $this->getView('main');
        }

        return $v;
    }

    public function login() {
        $post = $_POST;

        if ((isset($post['name']) && !empty($post['name'])) && (isset($post['password']) && !empty($post['password']))) {
            $model = $this->getModel();

            $sel = $model->checkLogin($post['name'], $post['password']);
            
            if ($sel) {
                wlroot::redirect(base_url_admin);
            } else {
                sendText(wlText::_('Not Logged In'), 1);
                wlroot::redirect(base_url_admin);
            }
        } else {
            sendText(wlText::_('Name Or Pasword Empty'), 1);
            wlroot::redirect(base_url_admin);
        }
        return false;
    }

}