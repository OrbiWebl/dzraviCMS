<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function menuNavigation(){
    $query = 'SELECT `n`.*, `p`.`title` FROM `navigation` AS `n` LEFT JOIN `Pages_list` AS `p` ON `n`.`page_id` = `p`.`id` ORDER BY `n`.`menuid` ASC LIMIT 8';
    $nav = getListdb($query);

    ?>
<div class="menuNavigation">
    
    
        <div class="navigationItems">
            <a href="?"><?php echo lText('MAIN'); ?></a>
        
    </div>
    <?php
    foreach ($nav as $row){
        ?>
    <div class="navigationItems">
        <a href="?mp=pages&pp=<?php echo $row['page_id']; ?>"><?php echo $row['title']; ?></a>
        <?php
        if (isset($row['dropdown']) && !empty($row['dropdown'])){
               $queryd = 'SELECT * FROM `Pages_list` WHERE `id` IN ('.$row['dropdown'].')';
    $dd = getListdb($queryd);
    ?>
  
    <div class="navdrop">
        <?php
            foreach ($dd as $drps){

                ?>
        <a href="?mp=pages&pp=<?php echo $drps['id']; ?>"><div class="navfloat"><?php echo $drps['title']; ?></div></a>
        <?php
            }
            ?>
</div>
        <?php
        }
        ?>
    </div>
    <?php
    }
    ?>
    <div class="clear"></div>
</div>

<?php
return true;
}