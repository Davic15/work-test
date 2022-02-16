<?php
    include "../classes/dbh.class.php";
    include "../classes/deleteproducts.class.php";
    if (isset($_POST['delete'])) {
        (new DeleteProducts)->deleteProductsCheck($_POST['checkbox']);
        echo "<script>window.location.href='../index.php'</script>";
    }
?>