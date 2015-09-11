<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */
if (!isset($_GET['ct'])){
$sql = 'SELECT * FROM `items`';
$itemslist = getListdb($sql);
}else{
    $id = (int)$_GET['ct'];
   $sql = 'SELECT * FROM `items` WHERE `cat_id` = '.$id;
$itemslist = getListdb($sql); 
}
