<?php
    /** 
     * Include Autoloader.
     * Load a class when is needed.
     * 
     * Method myAutoLoader.
     * @param $className
     * Check if the path to a certain class is valid and load it.
    */
    spl_autoload_register("myAutoLoader");
    function myAutoLoader($className) {
        $path = "./classes/";
        $extension = ".class.php";
        $fullPath = $path . $className . $extension;
        if (is_file($fullPath)) {
            include_once $fullPath;
        }
    }


