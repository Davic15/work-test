/* 
 * JavaScript File for the index.
 * Check if the user clicks on the add button to call that page.
*/
const btnNewProductEl = document.getElementById("add-product-btn");
btnNewProductEl.addEventListener("click", addProduct);

function addProduct() {
    // Local Development
    //window.location.href="../../scandiweb-test/add-product.php";
    //Webhost Development
    window.location.href="../add-product.php";
}