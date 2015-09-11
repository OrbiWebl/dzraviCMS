<?php
/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */
?>
<div class="MainPanel">
    <div class="MainPanelTitle">
        <?php echo lText('Create Navigation'); ?>
    </div>

    <div class="MainPanelWorkBlock">

        <div class="MainPanelList">
            <?php
            foreach ($list as $row) {
                ?>
                <a href="?mp=navigation&id=<?php echo $row['id']; ?>"><div class="MainPanelListTitle"><?php echo $row['title']; ?></div></a>
                <div class="delete"><a href="?mp=navigation&id=<?php echo $row['id']; ?>&delete"><?php echo lText('Delete'); ?></a></div>
                <?php
            }
            ?>
        </div>
        <?php
        if (isset($_GET['id'])) {


            ?>
            <div class="MainPanelWorkBlockInput">
                <form action="?" method="post">
                    <div class="form_block">
                        <span class="left_block_text">
                            <?php echo lText('Xazis nomeri'); ?>
                        </span>

                        <span class="right_block_form">
                            <input type="text" name="menuid" size="3" value="<?php if (!empty($oneNav->menuid))echo $oneNav->menuid; ?>">
                        </span>
                    </div>
                    <div class="form_block">
                        <span class="left_block_text">
                            <?php echo lText('Chamoshladi menus mibma'); ?>
                        </span>

                        <span class="right_block_form">
                            <div class="checkboxes">
                                <?php
                                $checked = '';
                                $dd = array();
                                if (!empty($oneNav->dropdown)){
                                $arr = explode(",",$oneNav->dropdown);
                                
                                foreach ($arr as $drop){
                                    $dd[] = $drop;
                                }
                                }
                                   
                                foreach ($list as $row) {
                                    if ($row['id'] != $_GET['id']) {

                                        if (in_array($row['id'], $dd)){
                                           $checked = 'checked=""'; 
                                        }

                                        ?>

                                <div class="left_block_text"><?php echo $row['title']; ?></div>
                                    <input type="checkbox" name="dropdown[]" value="<?php echo $row['id']; ?>" <?php echo $checked; ?>>

                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </span>
                    </div>
                    <div class="form_block">
                        <div>
                        <span class="left_block_text">
                            <?php echo lText('Linkis chartva'); ?>
                        </span>
                        <span class="right_block_form">
                            <?php 
                            if (isset($oneNav->urlinit)){
                            $val = $oneNav->urlinit;
                            }else{
                              $val = 1;
                            }
                            ?>
                        <input type="radio" name="urlinit" value="<?php echo $val; ?>" checked="">
                        </span>
                        </div>
                        <div>
                            <span class="left_block_text">
                            <?php echo lText('Linkis gamortva'); ?>
                        </span>
                            <span class="right_block_form">
                        <input type="radio" name="urlinit" value="0" >
                            </span>
                        </div>
                    </div>
                    <div class="hidden">
                        <input type="hidden" name="task" value="navigation">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
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
        }
        ?>
    </div>


</div>


