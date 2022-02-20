<?php
    /** 
     * Include deleteproducts..
     * If the user clicks mass delete button it calls the method in charge
     * to check and delete the products selected by the user.
     * Then redirect to the index page.
    */
    include "../classes/dbh.class.php";
    include "../classes/deleteproducts.class.php";
    if (isset($_POST['delete'])) {
        (new DeleteProducts)->deleteProductsCheck($_POST['checkbox']);
        echo "<script>window.location.href='../index.php'</script>";
    }


