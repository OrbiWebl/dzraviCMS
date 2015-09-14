<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

abstract class wlroot {

    public static function _($link){
        return $link;
    }
    public static function redirect($url, $statusCode = 303) {
        if (headers_sent()) {
            ?>
              <script>
                window.location.assign("<?php echo $url; ?>");
              </script>
            <?php

        } else {
            header('Location: ' . $url, true, $statusCode);
        }
    }

}
