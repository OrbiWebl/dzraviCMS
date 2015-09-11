<?php
/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

$tags = array();
$tags[] = base64_encode('<script src="includes/ckeditor/ckeditor.js"></script>');
$tags[] = base64_encode('<script src="includes/ckeditor/samples/js/sample.js"></script>');
$tags[] = base64_encode('<link rel="stylesheet" href="includes/ckeditor/samples/css/samples.css">');
$tags[] = base64_encode('<link rel="stylesheet" href="includes/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">');

headerElements($tags,'pages');

?>
	


<div class="MainPanel">
    <div class="MainPanelTitle">
        <?php echo lText('Create Pages'); ?>
    </div>
    <?php
    
    //if (isset($_GET['id'])){
        ?>
    
    <div class="MainPanelWorkBlock">
        <div class="MainPanelList">
            <?php

            foreach ($list as $row){
                ?>
            <a href="?mp=pages&id=<?php echo $row['id']; ?>"><div class="MainPanelListTitle"><?php echo $row['title']; ?></div></a>
            <div class="delete"><a href="?mp=pages&id=<?php echo $row['id']; ?>&del"><?php echo lText('Delete'); ?></a></div>
            <?php
            }
            ?>
        </div>
        <div class="MainPanelWorkBlockInput">
            <form action="?" method="post">
                <span class="left_block_text">
                <?php echo lText('Title'); ?>
            </span>
                <span class="right_block_form">
                <input type="text" name="page_title" value="<?php if (!empty($oneList->id))echo $oneList->title; ?>">
                </span>
               		<textarea cols="80" id="editor1" name="post" rows="10"><?php if (!empty($oneList->id))echo $oneList->output; ?></textarea>

		<script>

			CKEDITOR.replace( 'editor1', {
	
	language: 'ka'
});

		</script>
                <div class="hidden">
                    <input type="hidden" name="task" value="pages">
                    <input type="hidden" name="id" value="<?php if (isset($_GET['id'])) echo $_GET['id']; ?>">
                    <?php
                    if (isset($_GET['del'])){
                        ?>
                    
                    <input type="hidden" name="delete" value="del">
                    <?php
                    }
                    ?>
                </div>
                <div class="button">
                    <input type="submit" name="postbut" value="<?php if (!isset($_GET['del'])){echo lText('Send');}else{echo lText('Delete');} ?>" class="buttonblock">
                </div>
            </form>
        </div>
    </div>
<script>
	initSample();
</script>
<?php 
   // }else{
        ?>
<!--    <div class="MainPanelWorkBlock"><?php echo lText('Gverdi gaixsna arasworad!'); ?></div> -->
    <?php
   // }
    ?>
</div>