<html>
    <head>
        <meta charset='utf-8'>
        <title> test </title>
    </head>

    <body>
        <?php
        include PATH_ROOT . '/helpers/getAll.php';
        getLibs();
        ?>
        <div class="hader">
            <?php
            echo $w->getPosition('top1');
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