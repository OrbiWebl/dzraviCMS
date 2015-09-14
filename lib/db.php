<?php

abstract class DB {

    private static $query;
    private static $BDL = NULL;

    public static function checkConn() {
        if (!self::$BDL)
            return DB::getConn();
        return self::$BDL;
    }

    private static function getConn() {
        $db_name = "dzravi";
        $db_user = "root";
        $db_host = "localhost";
        $db_pass = "vertrigo";


        $conn = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name");
// Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        self::$BDL = $conn;
        return $conn;
    }

    public static function setQuery($q) {
        self::$query = $q;
        
    }

    public static function Execute($getli = '') {
        if (!self::$query) {
            return false;
        }
        if (mysqli_query(self::$BDL, self::$query)) {
            if ($getli == 'last_id') {
                return mysqli_insert_id(self::$BDL);
            } else {
                return 1;
            }
        } else {
            return 0;
        }
    }

    public static function getList() {
        if (!self::$query) {
            return false;
        }

        $result = mysqli_query(self::$BDL, self::$query);
        $array = array();
        if (!empty($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row;
            }
            return $array;
        } else {
            return array();
        }
    }

    public static function getRow() {
        if (!self::$query) {
            return false;
        }

        $result = mysqli_query(self::$BDL, self::$query);
        
        return mysqli_fetch_assoc($result);
    }

    public static function getNum() {
        if (!self::$query) {
            return false;
        }

        
        $result = mysqli_query(self::$BDL, self::$query);

        return mysqli_num_rows($result);
    }

    public static function dbStr($str) {
        return mysqli_real_escape_string(self::$BDL, $str);
    }

}
