<?php
    spl_autoload_register(function ($className) {
        if (file_exists('./Classes/' . $className . '.php')) {
            include_once './Classes/' . $className . '.php';
        }
        elseif (file_exists('./Connection/' . $className . '.php')) {
            include_once './Connection/' . $className . '.php';
        }
        elseif(file_exists('./FunctionsProducts/' . $className . '.php')) {
            include_once './FunctionsProducts/' . $className . '.php';
        }
    });
?>