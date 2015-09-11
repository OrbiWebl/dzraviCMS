<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

$css = array('style.css');


foreach ($css as $script){
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/template/css/<?php echo $script; ?>">

<?php
}
?>