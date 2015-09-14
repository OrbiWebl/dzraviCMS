<?php

class WL_Model extends WLfactory {

    public $ClassName;
    public $DB;

    public function __construct() {
        $this->ClassName = get_called_class();
    }


    public function WDB() {
        return $this->getDBL();
    }

}
