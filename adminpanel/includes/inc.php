<?php
session_start();
/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

foreach (glob("../lib/*.php") as $filename) {
    require_once $filename;
}

?>