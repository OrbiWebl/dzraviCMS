<?php

class wl_widgets{

    public $DBL;

    public function __construct($DBL) {
        $this->DBL = $DBL;
    }

    public function getDBL() {
        return $this->DBL;
    }

    public function getPosition($pos) {
        if ($pos) {
            $wdb = $this->DBL;
            require_once PATH_ROOT . '/lib/db.php';
            $db = DB::checkConn();

            $query = 'SELECT * FROM `widgets` WHERE `published` = 1';

            DB::setQuery($query);
            $items = DB::getList();

            $html = '';
            if ($items) {
                ob_start();

                foreach ($items as $row) {
                    $dir = PATH_ROOT . '/widgets/' . $row['w_name'] . '/' . $row['w_name'] . '.php';
                    if (file_exists($dir)) {
                        ?>
                        <div class="widget_<?php echo $pos; ?>">
                            <?php
                            include $dir;
                            ?>
                        </div>
                        <?php
                    }
                }

                $html = ob_get_contents();
                ob_end_clean();
            }
            return $html;
        }
        return false;
    }

}
