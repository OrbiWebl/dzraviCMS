<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */
abstract class wlText{
    
    public static function _($text){
        $lang = '';
        if(isset($_SESSION['lang'])){
            $lang = $_SESSION['lang'];
        }
        if(!empty($lang) && file_exists(PATH_ROOT.'/language/'.$lang.'/'.$lang.'.ini')){
          $array = parse_ini_file(PATH_ROOT.'/language/'.$lang.'/'.$lang.'.ini');  
          foreach($array as $k=>$r){
              if($text == $k){
                  $text = $r;
              }
          }
        }
        return $text;
    }
}

