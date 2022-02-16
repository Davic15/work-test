<?php
include "../classes/dbh.class.php";
include "../classes/product.class.php";
include "../classes/book.class.php";
include "../classes/dvd.class.php";
include "../classes/furniture.class.php";
include "../classes/validate.class.php";

$p = new Product();
$p->setSku($_POST["sku"]);
$p->setName($_POST["name"]);
$p->setPrice($_POST["price"]);
$p->setProductType($_POST["productType"]);

echo ($p->getName());

if (isset($_POST["submit"])) {
    echo ($p->getName());
    /* */
    if ((new Validate)->validateSku($_POST["sku"])) {
        (new $_POST["productType"]($_POST))->addProduct();
        echo "<script>window.location.href='../index.php'</script>";
    } else {
        header("location: ../add-product.php?error=SkuTaken");
    }
}