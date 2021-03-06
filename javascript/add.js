/*
 * JavaScript File to add a new product
 * Hide the form and set the attribute as required for validating purposes.
*/
const formDvdEl = document.getElementById("form-dvd");
const formBookEl = document.getElementById("form-book");
const formFurnitureEl = document.getElementById("form-furniture");
const btnCancel = document.getElementById("cancel")

const typeProductEl = document.getElementById("productType");
const descriptionEl = document.getElementById("description-products");

const sizeEl = document.getElementById("size");
const weightEl = document.getElementById("weight");
const heightEl = document.getElementById("height");
const widthEl = document.getElementById("width");
const lengthEl = document.getElementById("length");

typeProductEl.addEventListener("change", formHideDisplay);
btnCancel.addEventListener("click", cancelButton);

function cancelButton() {
    //Local development
    //window.location.href="../../scandiweb-test/index.php";
    //Webhost development
    window.location.href="../index.php";
}

function formHideDisplay() {
    let opts = typeProductEl.value;
    opts == "Dvd" && dvdOption();
    opts == "Book" && bookOption();
    opts == "Furniture" && furnitureOption();
}

function dvdOption() {
    formDvdEl.classList.remove("hidden")
    formBookEl.classList.add("hidden");
    formFurnitureEl.classList.add("hidden");

    sizeEl.setAttribute("required", "");
    weightEl.removeAttribute("required")
    heightEl.removeAttribute("required");
    widthEl.removeAttribute("required");
    lengthEl.removeAttribute("required");

    descriptionEl.innerText = "* Type the size of your DVD in MB."
}

function bookOption() {
    formDvdEl.classList.add("hidden")
    formBookEl.classList.remove("hidden");
    formFurnitureEl.classList.add("hidden");

    sizeEl.removeAttribute("required");
    weightEl.setAttribute("required", "");
    heightEl.removeAttribute("required");
    widthEl.removeAttribute("required");
    lengthEl.removeAttribute("required");

    descriptionEl.innerText = "* Type the weight of your Book in KG."

}

function furnitureOption() {
    formDvdEl.classList.add("hidden")
    formBookEl.classList.add("hidden");
    formFurnitureEl.classList.remove("hidden");

    sizeEl.removeAttribute("required");
    weightEl.removeAttribute("required");
    heightEl.setAttribute("required", "");
    widthEl.setAttribute("required", "");
    lengthEl.setAttribute("required", "");

    descriptionEl.innerText = "* Type the Height, Width and Length of your Furniture in HxWxL."

}