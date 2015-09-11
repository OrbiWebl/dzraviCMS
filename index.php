<?php
/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

include_once 'includes/inc.php';
include_once 'includes/db.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';
include_once 'forforms.php';
?>
<div class="IndexMain_block">
    <?php
//pages genereted system


    $page = isset($_GET['mp']) ? $_GET['mp'] : 'main';

    if (file_exists('pages/' . $page . '.php')) {
        if ($page != 'main'){
            include_once 'pages/mysql/main.php';
        }
        if (file_exists('pages/mysql/' . $page . '.php')) {
            include_once 'pages/mysql/' . $page . '.php';
        }else{
            
        }
        include_once 'pages/' . $page . '.php';
    } else {
        include_once 'pages/error.php';
    }
    
    //create form action system
    if (!empty($_POST) && is_array($_POST) && !empty($_POST['task'])){
       $form = new ForForms;
       if (method_exists($form, $_POST['task'])){
       $form->$_POST['task']($_POST);
       }else{
       $error = lText('uncorrect task');
        echo sendError($error);   
       }
    }

    
    ?>
</div>
<?php
include_once 'includes/footer.php';