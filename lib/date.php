<?php

abstract class Date {
    /* pirveli parametri aris tarigi "today" meore parametri plus dgeebis raodenoba "0" */

    public static function new_days($my_date = 'today', $numdays = '0') {
        $date_t = strtotime($my_date . ' UTC');
        return gmdate('Y-m-d', $date_t + ($numdays * 86400));
    }

    public static function getDate($format = 4, $time = '') {

        date_default_timezone_set('Asia/tbilisi');
        switch ($format) {
            case 1 :
                $get = 'd-M-Y';
                break;
            case 2 :
                $get = 'd-M-Y H:i:s';
                break;
            case 3 :
                $get = 'D-M-Y H:i:s';
                break;
            default:
                $get = 'd-m-Y H:i:s';
                $method = 4;
                break;
        }
        if (empty($time)) {
            $time = time();
        }
        $date = date($get, $time);
        return $date;
    }

}
