<?php

abstract class wlSess {

    public static function setsession($name = '', $value = '') {

        if (!empty($name) && !empty($value)) {
            if (!isset($_SESSION[$name])) {
                $_SESSION[$name] = $value;
                return $_SESSION[$name];
            }
            return false;
        } else {
            return false;
        }
    }

    public static function getsession($name = '') {
        if (!empty($name)) {
            return $_SESSION[$name];
        }
    }

}
