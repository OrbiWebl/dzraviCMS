<?php

include PATH_ROOT . '/widgets/wl_widgets.php';
$w = new wl_widgets();

function getConComp($conn, $page, $method) {
    require 'framework/legacy/factory.php';

    $fac = new WLfactory($conn);
    return $fac->getPage($page, $method);
}

function getLibs() {
    foreach (glob("lib/*.php") as $filename) {
        if ($filename != 'legacy' || $filename != 'db') {
            require_once $filename;
        }
    }
}
function getHelpers() {
    
    foreach (glob("helpers/*.php") as $filename) {
        echo $filename;
        die;
        if ($filename != 'getAll') {
            require_once $filename;
        }
    }
}
