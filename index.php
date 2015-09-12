<?php
/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

include_once 'lib/config.php';
define('PATH_ROOT',  __DIR__);
define('PATH_FRAMEWORK',  __DIR__.'/framework');
//include_once 'includes/inc.php';
include_once 'includes/db.php';
//include_once 'includes/functions.php';
//include_once 'includes/header.php';
//include_once 'forforms.php';

//pages genereted system


    $page = isset($_GET['mp']) ? $_GET['mp'] : '';

    $method = isset($_GET['mt']) ? $_GET['mt'] : '';
    
    
    require 'framework/factory.php';
    
    $fac = new WLfactory;
    $fac ->getPage($page, $method);
    
    /*
    //create form action system
    if (!empty($_POST) && is_array($_POST) && !empty($_POST['task'])){
       $form = new ForForms;
       if (method_exists($form, $_POST['task'])){
       $form->$_POST['task']($_POST);
       }else{
       $error = lText('uncorrect task');
        echo sendError($error);   
       }
    }
     * 
     */

