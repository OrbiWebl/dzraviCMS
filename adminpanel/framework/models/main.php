<?php
require_once PATH_FRAMEWORK.'/legacy/WL_Model.php';
class main_model extends WL_Model{
    
   
    function checkLogin($name, $password){
        
        if(empty($name) && empty($password)){
            return false;
        }

        DB::setQuery('SELECT * FROM users WHERE `mail` = "'.DB::dbStr($name).'" AND password = "'.DB::dbStr(md5($password)).'" AND user_type = 1');
        $data = DB::getNum();
        
        if($data == 1){
            $_SESSION['user'] = $data;
            return true;
        }
        else{
            return false;
        }
    }
    public function getComponents(){
        DB::setQuery('SELECT * FROM components ');
        $data = DB::getList();
       
        if($data){
            return $data;
        }
        return array();
        
    }
}
