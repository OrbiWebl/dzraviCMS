<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php echo lText('binuli.ge'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<LINK REL="SHORTCUT ICON" HREF="image/favicon.ico"/>


<?php
include_once '../template/css.php';
$tags = getHeaderElements();

if (!empty($tags)){

foreach ($tags as $row){

echo base64_decode($row['tags']).' '
        . ''
        . '';
}

}

include_once '../template/js.php';

?>
</head>
<body>
    
    <div class="Header">
        <a href="<?php echo base_url; ?>"><div class="logo"></div></a>
       <?php // echo lText('Header'); ?></div>
<?php
 menuNavigation();
?>
<?php
echo AdminMenuBar();
getText();
/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */
 ?>
