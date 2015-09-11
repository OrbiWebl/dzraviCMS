<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="MainPanel">
    <div class="MainPanelTitle">
        <?php echo lText('Create Category'); ?>
    </div>

    <div class="MainPanelWorkBlock">

        <div class="MainPanelList">
            <?php
            foreach ($cat as $row) {
                ?>
                <a href="?mp=addcategory&id=<?php echo $row['id']; ?>"><div class="MainPanelListTitle"><?php echo $row['title']; ?></div></a>
                <div class="delete"><a href="?mp=addcategory&id=<?php echo $row['id']; ?>&delete"><?php echo lText('Delete'); ?></a></div>
                <?php
            }
            ?>
        </div>
        <?php
       


            ?>
            <div class="MainPanelWorkBlockInput">
                <form action="?" method="post">
                    <div class="form_block">
                        <span class="left_block_text">
                            <?php echo lText('Title'); ?>
                        </span>

                        <span class="right_block_form">
                            <input type="text" name="title" value="<?php if (isset($onecat->id)) echo $onecat->title; ?>">
                        </span>
                    </div>

                    <div class="hidden">
                        <input type="hidden" name="task" value="addcategory">
                        <input type="hidden" name="id" value="<?php if(isset($_GET['id'])) echo $_GET['id']; ?>">
                                            <?php
                    if (isset($_GET['delete'])){
                        ?>
                    
                    <input type="hidden" name="delete" value="del">
                    <?php
                    }
                    ?>
                    </div>
                    <div class="button">
                        <input type="submit" name="post" value="<?php if (!isset($_GET['delete'])){echo lText('Send');}else{echo lText('Delete');} ?>" class="buttonblock">
                    </div>
                </form>
            </div>
            <?php
       
        ?>
    </div>


</div>