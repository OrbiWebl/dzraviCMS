<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="MainPages">
<?php
if (!isset($_GET['pp'])){
    echo lText('Carielia');
}else{
?>
    <div Class="MainPageTitleBlock"><?php echo $pages->title; ?></div>
    <div class="MainPagePostBlock"><?php echo $pages->output; ?></div>
    <?php
}
?>
</div>