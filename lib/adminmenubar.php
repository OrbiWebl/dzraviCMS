<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function AdminMenuBar(){
    

?>
        <div class="AdminMenuBar">
        <a href="?mp=pages"><div class="ListMenu"><?php echo lText('Create pages'); ?></div></a>
        <a href="?mp=navigation"><div class="ListMenu"><?php echo lText('Create navigation'); ?></div></a>
        <a href="?mp=addcategory"><div class="ListMenu"><?php echo lText('Create category'); ?></div></a>
        
    </div>
<?php
}
