<?php

session_start();


include_once 'helpers/define.php';
include_once 'helpers/getLibs.php';
define('PATH_ROOT', __DIR__);
define('PATH_FRAMEWORK', __DIR__ . '/framework');
//include_once 'includes/inc.php';
//include_once 'includes/functions.php';
//include_once 'includes/header.php';
//include_once 'forforms.php';
//pages genereted system
getAllLibs();

$page = isset($_GET['mp']) ? $_GET['mp'] : '';

$method = isset($_GET['mt']) ? $_GET['mt'] : '';

//require 'lib/legacy.php';
$fac = new Legacy();
$fac->getPage($page, $method);




