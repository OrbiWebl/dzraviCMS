<?php
require_once PATH_FRAMEWORK.'/legacy/WL_Model.php';
class main_model extends WL_Model{
    
    function getData(){
        DB::setQuery('SELECT * FROM widgets');
        return DB::getList();
    }
}
