const formDvdEl = document.getElementById("form-dvd");
const formBookEl = document.getElementById("form-book");
const formFurnitureEl = document.getElementById("form-furniture");
const btnsubmit = document.getElementById("submit");
const typeProductEl = document.getElementById("productType");

const sizeEl = document.getElementById("size");
const weightEl = document.getElementById("weight");
const heightEl = document.getElementById("height");
const widthEl = document.getElementById("width");
const lengthEl = document.getElementById("length");

typeProductEl.addEventListener("change", formHideDisplay);

function formHideDisplay() {
    let opts = typeProductEl.value;
    opts == "Dvd" ? dvdOption() : 
        opts == "Book" ? bookOption() :
            opts == "Furniture" ? fornitureOption() : console.log("no option");
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
}

function fornitureOption() {
    formDvdEl.classList.add("hidden")
    formBookEl.classList.add("hidden");
    formFurnitureEl.classList.remove("hidden");

    sizeEl.removeAttribute("required");
    weightEl.removeAttribute("required");
    heightEl.setAttribute("required", "");
    widthEl.setAttribute("required", "");
    lengthEl.setAttribute("required", "");
}