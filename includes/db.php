<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

$DBL = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name") or die(mysql_error());
mysqli_set_charset( $DBL,'SET NAMES utf8');
