<?php

session_start();


include_once __DIR__ . '/../helpers/define.php';

define('PATH_ROOT', __DIR__);

define('PATH_FRAMEWORK', __DIR__ . '/framework');


foreach (glob(PATH_ROOT . "/../lib/*.php") as $filename) {

    if ($filename != 'getAll.php') {
        require_once $filename;
    }
}
foreach (glob(PATH_ROOT . "/../helpers/*.php") as $filename) {

    $filenameExp = explode('/',$filename);
    if (isset($filenameExp[3]) && $filenameExp[3] != 'getAll.php') {
        require_once $filename;
    }
}




$page = isset($_GET['mp']) ? $_GET['mp'] : '';

$method = isset($_GET['mt']) ? $_GET['mt'] : '';

$fac = new Legacy();
$fac->getPage($page, $method);




