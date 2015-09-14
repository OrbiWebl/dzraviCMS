<html>
    <head>
        <meta charset='utf-8'>
        <title> test </title>
        <script type="text/javascript" src="<?php echo base_url_admin; ?>/template/test/js/jquery-1.8.3.min.js"></script>
    </head>

    <body>
        <?php
        include PATH_ROOT . '/../helpers/getAll.php';
        getLibs();
        getHelpers();
        ?>
        <div class="hader">
            <?php
           // getText();
            ?>
        </div>
        <div class="cont">

            <?php echo getConComp($dbl, $controller, $method); ?>

        </div>
        <div class="footer">
            footer
        </div>
    </body>
</html>