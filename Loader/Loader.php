<?php
    spl_autoload_register(function ($className) {
        ?>
        <h1>hi</h1>
        <?php
        echo $className;
        if (file_exists('./Classes/' . $className . '.php')) {
            include_once './Classes/' . $className . '.php';
            echo "here1";
        }
        elseif (file_exists('./Connection/' . $className . '.php')) {
            include_once './Connection/' . $className . '.php';
            echo "here2";
        }
        elseif(file_exists('./FunctionsProducts/' . $className . '.php')) {
            include_once './FunctionsProducts/' . $className . '.php';
            echo "here3";
        } else {
            echo "fail";
        }
    });
?>