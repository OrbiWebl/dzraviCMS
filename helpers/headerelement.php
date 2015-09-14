<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function headerElements($el, $mp = '') {


    if (is_array($el)) {
        foreach ($el as $row) {
            $ex = 'SELECT * FROM `header_tags` WHERE `tags`="' . $row . '" AND `mp_name`="' . $mp . '"';
            $tags = getOnedb($ex);

            if (empty($tags->id)) {

                $ins = 'INSERT INTO `header_tags`(`tags`,`mp_name`)'
                        . 'VALUES'
                        . '("' . dbstring($row) . '","' . $mp . '")';
                insert($ins);
            }
        }
    } else {
        $text = lText('elementi unda iyos array');
        $type = 1;
        sendText($text, $mtype);
        return true;
    }
}

function getHeaderElements() {
    if (isset($_GET['mp'])) {
        $mp = $_GET['mp'];
        if (isset($mp)) {
            $ex = 'SELECT * FROM `header_tags` WHERE `mp_name` = "allmp" OR `mp_name`="' . $mp . '"';
            $elements = getListdb($ex);
        } else {
            return false;
        }
    } else {
        return false;
    }

    return $elements;
}
