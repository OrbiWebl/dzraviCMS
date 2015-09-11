<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

$sql = 'SELECT * FROM `items`';
$itemses = getListdb($sql);

if (isset($_GET['id'])){
    $sqll = 'SELECT `a`.*,`c`.`title` AS `cattitle`,`c`.`id` AS `catid` FROM `items` AS `a` '
            . 'LEFT JOIN `category` AS `c` ON `c`.`id` = `a`.`cat_id`'
            . ' WHERE `a`.`id`='.(int)$_GET['id'].' ORDER BY `a`.`id` DESC';
    $it = getOnedb($sqll);

    
}

    $catt = 'SELECT * FROM `category`';
    $cate = getListdb($catt);
