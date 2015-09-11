<?php


/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

?>
<div class ="Mainpage">
    <div class="hello_world">
    <?php echo lText('Hello World'); ?>
    </div>
    <?php 
    if (isset($_SESSION['adminmail'])){
        ?>
    <div class='user_mail'>Hellow <?php echo $_SESSION['adminmail']; ?></div>
        <?php
    }
    
    
    ?>
    

</div>

