<?php

class DB {

    public $query;

    function __construct() {
        
    }

    public function setQuery($q) {
        $this->query = $q;
    }

    public function Execute($getli = '') {
        if (!$this->query) {
            return false;
        }
        if (mysqli_query(DBL, $this->query)) {
            if ($getli == 'last_id') {
                return mysqli_insert_id(DBL);
            } else {
                return 1;
            }
        } else {
            return 0;
        }
    }

    public function getList() {
        if (!$this->query) {
            return false;
        }

        $result = mysqli_query(DBL, $this->query);

        $array = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row;
            }
            return $array;
        } else {
            return array();
        }
    }
    
    public function getRow() {
        if (!$this->query) {
            return false;
        }

        $result = mysqli_query(DBL, $this->query);

        return $result;
    }
    
    public function getNum() {
        if (!$this->query) {
            return false;
        }

        $result = mysqli_query(DBL, $this->query);

        return mysqli_num_rows($result);
    }

}
