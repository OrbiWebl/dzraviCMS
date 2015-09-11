<?php
/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */
?>
<div class="mainRegister_block">
    <form action="?" method="POST">
        <div class="form_block">
            <span class="left_block_text">
                <?php echo lText('Mail'); ?>
            </span>
            <span class="right_block_form">
                <input type="text" name="mail">
            </span>
        </div>
        <div class="form_block">
            <span class="left_block_text">
                <?php echo lText('Password'); ?>
            </span>
            <span class="right_block_form">
                <input type="password" name="password">
            </span>
        </div>
        <div class="form_block">
            <span class="left_block_text">
                <?php echo lText('Confirm Password'); ?>
            </span>
            <span class="right_block_form">
                <input type="password" name="confirm">
            </span>
        </div>
                <div class="form_block">
            <span class="left_block_text">
                <?php echo lText('iuridiuli piri'); ?>
            </span>
            <span class="right_block_form">
                <input type="radio" name="type" value="1" id="iurid">
            </span>
                    <span class="left_block_text">
                <?php echo lText('fizikuri piri'); ?>
            </span>
            <span class="right_block_form">
                <input type="radio" name="type" value="2" id="fizik">
            </span>
        </div>
        <div class="form_block">
            <span class="left_block_text">
                <span id="fiziktext"><?php echo lText('dasaxeleba'); ?></span>
                <span id="iuridtext" style="display: none;"><?php echo lText('saxeli, gvari'); ?></span> 
            </span>
            <span class="right_block_form">
                <input type="text" name="name">
            </span>
        </div>
        <div class="form_block">
            <span class="left_block_text">
                <?php echo lText('Number'); ?>
            </span>
            <span class="right_block_form">
                <input type="text" name="number">
            </span>
        </div>
        <div class="form_block">
            <span class="left_block_text">
                <?php echo lText('Address'); ?>
            </span>
            <span class="right_block_form">
                <input type="text" name="address">
            </span>
        </div>
        <div class="form_block">
            <span class="left_block_text">
                <?php echo lText('Phone'); ?>
            </span>
            <span class="right_block_form">
                <input type="text" name="phone">
            </span>
        </div>
        <div class="hidden">
            <input type="hidden" name="task" value="register">
        </div>
        <div class="cls"></div>
        <div class="button">
            <input type="submit" name="post" value="<?php echo lText('Send'); ?>">
        </div>
    </form>
</div>