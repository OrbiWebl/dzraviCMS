<?php

function getAllLibs() {
    foreach (glob(PATH_ROOT."/lib/*.php") as $filename) {
        
        if ($filename != 'getAll.php') {
            require_once $filename;
        }
    }
}
