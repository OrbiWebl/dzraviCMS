<?php

class WL_Model{
    
    public $ClassName;
    public $DB;

    public function __construct() {
        $this->ClassName = get_called_class();
        
        require PATH_ROOT.'/lib/dbclass.php';
        $this->DB = new DB();
    }
    
}