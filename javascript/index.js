const btnNewProductEl = document.getElementById("add-product-btn");
btnNewProductEl.addEventListener("click", addProduct);

function addProduct() {
    console.log("hi");
    window.location.href="../../scandiweb-test/AddNewProduct/AddNewProduct.php"
}