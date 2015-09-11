<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

function getListdb($sql) {

    $q = mysql_query($sql);
    $array = array();
    while ($query = mysql_fetch_assoc($q)) {
        $array[] = $query;
    }

    if (is_array($array)) {
        $object = (object) $array;
    } else {
        $object = $array;
    }
    return $object;
}

function getOnedb($sql) {

    $q = mysql_fetch_assoc(mysql_query($sql));
    //$array = array();
    $array = $q;

    if (is_array($array)) {
        $object = (object) $array;
    } else {
        $object = $array;
    }
    return $object;
}

function insert($sql){
    $ins = mysql_query($sql) or die(mysql_error());
    return $ins;
}

function delete($sql){
    $del = mysql_query($sql) or die(mysql_error());
    return $del;
}

$time = time();