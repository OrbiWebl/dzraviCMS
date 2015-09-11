<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

if (isset($_GET['id'])){
$ssql = 'SELECT * FROM `navigation` WHERE `page_id`="'.(int)$_GET['id'].'"';
$oneNav = getOnedb($ssql);


}

