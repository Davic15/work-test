<?php
    spl_autoload_register(function ($className) {
        /*if (file_exists('./Classes/' . $className . '.php')) {
            include_once './Classes/' . $className . '.php';
        }
        elseif (file_exists('./ConnectionDataBase/' . $className . '.php')) {
            include_once './ConnectionDataBase/' . $className . '.php';
        }
        elseif(file_exists('./GetDeleteProducts/' . $className . '.php')) {
            include_once './GetDeleteProducts/' . $className . '.php';
        }*/
        file_exists('./Classes/' . $className . '.php') && include_once './Classes/' . $className . '.php';
        file_exists('./ConnectionDataBase/' . $className . '.php') && include_once './ConnectionDataBase/' . $className . '.php';
        file_exists('./GetDeleteProducts/' . $className . '.php') && include_once './GetDeleteProducts/' . $className . '.php';
    });
?>