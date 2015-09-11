<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */


if (isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $sqli = 'SELECT * FROM `Pages_list` WHERE `id`="'.dbstring($id).'"';
    $oneList = getOnedb($sqli);
    
}
