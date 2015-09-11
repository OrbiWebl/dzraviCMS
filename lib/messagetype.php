<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

function sendText($text,$type){
    
    if ($type == 1){
        //error
    }elseif ($type == 2){
        //success
    }else{
      $text = lText('sheamowmet messijis gagzavnis tipi!');
      $type = 3;
    }
    
    putsesText($text, $type);
    
}

function putsesText($text, $type){
    if (!empty($text)){
    $_SESSION['messagetext'] = $text;
    }
    if (!empty($type)){
    $_SESSION['messagetype'] = $type;
    }
}

function getText(){
    if (isset($_SESSION['messagetext']) && !empty($_SESSION['messagetext'])){
        if (isset($_SESSION['messagetype']) && !empty($_SESSION['messagetype'])){
            if ($_SESSION['messagetype'] == 1){
                //error
              $type = 'error';  
            }else{
                //success
                $type = 'success';
            }
        }else{
            $type = 'getText';
        }
        ?>
<div class ="<?php echo $type; ?>"><?php echo $_SESSION['messagetext']; ?></div>
        <?php
        unset($_SESSION['messagetext']);
        unset($_SESSION['messagetype']);
        return true;
    }
}