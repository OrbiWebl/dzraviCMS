<?php

abstract class wlMethod {

    public static function getPost($name = '', $method = 'REQUEST', $type = null) {

        $method = strtoupper($method);
        $post = '';
        switch ($type) {
            case 'GET' :
                $get = &$_GET;
                break;
            case 'POST' :
                $get = &$_POST;
                break;
            case 'FILES' :
                $get = &$_FILES;
                break;
            case 'COOKIE' :
                $get = &$_COOKIE;
                break;
            case 'ENV' :
                $get = &$_ENV;
                break;
            case 'SERVER' :
                $get = &$_SERVER;
                break;
            default:
                $get = &$_REQUEST;
                $method = 'REQUEST';
                break;
        }

        if (isset($get[$name]) && !empty($get[$name])) {
            if (!empty($type) && $type == 'int') {
                $post = (int) $get[$name];
            } else {
                $post = $get[$name];
            }
        } else {
            return false;
        }

        return $post;
    }

    public static function getInt($name = '', $method = 'REQUEST') {
        return wlMethod::getPost($name, $method, 'int');
    }

    public static function get($method = 'REQUEST') {
        $method = strtoupper($method);

        switch ($method) {
            case 'GET' :
                $get = &$_GET;
                break;
            case 'POST' :
                $get = &$_POST;
                break;
            case 'FILES' :
                $get = &$_FILES;
                break;
            case 'COOKIE' :
                $get = &$_COOKIE;
                break;
            case 'ENV' :
                $get = &$_ENV;
                break;
            case 'SERVER' :
                $get = &$_SERVER;
                break;
            default:
                $get = &$_REQUEST;
                $method = 'REQUEST';
                break;
        }
        if (isset($get) && !empty($get)) {
            return $get;
        } else {
            return false;
        }
    }

}
