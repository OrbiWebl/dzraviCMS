<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$adc = 'SELECT * FROM `category` ORDER BY `id` DESC';
$cat = getListdb($adc);
if (isset($_GET['id'])){
    $caid = (int)$_GET['id'];
    $adc = 'SELECT * FROM `category` WHERE `id`="'.$caid.'" ORDER BY `id` DESC';
$onecat = getOnedb($adc);
}