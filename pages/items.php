<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

?>
<div class="mainItems_block">

    <div class='Title'><?php echo lText('Items Page'); ?></div>
    <div class='Itemstable'>
        <?php
        foreach ($itemslist as $items){
            ?>
        
        <div class='itemslist'>
            <div class='itemsimage'>
                <img src='<?php echo base_url.$items['image']; ?>' alt='<?php echo $items['title']; ?>'/>
            </div>
            <div class='itemstitle'>
                <?php echo $items['title']; ?>
            </div>
            <div class='itemsprice'>
                <?php echo $items['price']; ?>
            </div>
            
        </div>
        <?php
        }
        ?>
    </div>
</div>

