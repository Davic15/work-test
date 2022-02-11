const btnNewProductEl = document.getElementById("add-product-btn");
btnNewProductEl.addEventListener("click", addProduct);

function addProduct() {
    window.location.href="../../scandiweb-test/addNewProduct.php";
}