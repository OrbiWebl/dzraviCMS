<?php
/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */
?>

<form action='?' method='post'>
    <div class='mainLogin'>
        <div class='mainLogin_text'>
            <?php echo lText('mail'); ?>
        </div>
        <div class='mainLogin_block'>
            <input type='text' name='adminmail'/>
        </div>
    </div>
    <div class='mainLogin'>
        <div class='mainLogin_text'>
            <?php echo lText('password'); ?>
        </div>
        <div class='mainLogin_block'>
            <input type='password' name='password'/>
        </div>
        <div class="hidden">
            <input type="hidden" name="task" value="login">
        </div>
        <div class="cls"></div>
        <div class="button">
            <input type="submit" name="post" value="<?php echo lText('Send'); ?>">
        </div>
    </div>

</form>