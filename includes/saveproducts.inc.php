<?php
    /** 
     * Include saveproducts.
     * The user fills the form and the data is saved to the database and then redirect
     * to the index page.
    */
    include "../classes/dbh.class.php";
    include "../classes/product.class.php";
    include "../classes/book.class.php";
    include "../classes/dvd.class.php";
    include "../classes/furniture.class.php";
    include "../classes/validate.class.php";

    if (isset($_POST["submit"])) {
        if ((new Validate)->validateSku($_POST["sku"])) {
            (new $_POST["productType"]($_POST))->addProduct();
            echo "<script>window.location.href='../index.php'</script>";
        } else {
            header("location: ../add-product.php?error=SkuTaken");
        }
    }

