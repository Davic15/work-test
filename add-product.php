<?php require_once "./Loader/Loader.php";?>
<?php 
    if(isset($_POST["submit"])) {
        (new $_POST["productType"]($_POST))->addProduct();
        echo "<script>window.location.href='./index.php'</script>";
    } 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./styles/index.css">
        <link rel="stylesheet" href="./styles/add.css">
        <title>Scandiweb Test</title>
    </head>
    <body>
        <!-- Navigation bar, it contains the title and two buttons. -->
        <nav>
            <div class="container-nav">
                <h1>Add Product</h1>
                <div class="container-nav_buttons">
                    <button id="submit" class="btn add" name="submit" form="product_form">Save</button>
                    <button id="cancel" name="cancel" class="btn delete cancel">Cancel</button>
                </div>
            </div>
        </nav>

        <!-- Form section -->
        <div class="container-form-add">
            <form id="product_form" action="" method="POST">
                <div class="outer">
                    <div id="label" class="labelClass">
                        <label class="label" for="sku">SKU:</label>
                    </div>
                    <div id="input">
                        <input type="text" id="sku" name="sku" placeholder="#sku" minlength="8" maxlength="8" required><br />
                    </div>
                </div>
                <div class="outer">
                    <div id="label" class="labelClass">
                        <label class="label" for="name">Name:</label>
                    </div>
                    <div id="input">
                        <input type="text" id="name" name="name" placeholder="#name" required><br />
                    </div>
                </div>
                <div class="outer">
                    <div id="label" class="labelClass">
                        <label class="label" for="price">Price:</label>
                    </div>
                    <div id="input">
                        <input type="number" step="any" id="price" name="price" placeholder="#price" required><br />
                    </div>
                </div>
                <div class="outer">
                    <div id="label" class="labelClass">
                        <label class="label" for="productType">Type Switcher</label>
                    </div>
                    <div id="input">
                        <select id="productType" name="productType">
                            <option selected disabled>Type Switcher</option>
                            <option value="Dvd" id="Dvd">DVD</option>
                            <option value="Book" id="Book">Book</option>
                            <option value="Furniture" id="Furniture">Furniture</option>
                        </select>
                    </div>
                </div>



                <div class="outer hidden" id="form-dvd">
                    <div id="label" class="labelClass">
                        <label class="label" for="size">Size (MB):</label>
                    </div>
                    <div id="input">
                        <input type="number" id="size" step="1" name="size" placeholder="#size" required>
                        
                    </div>
                </div>

                <div class="outer hidden" id="form-book">
                    <div id="label" class="labelClass">
                        <label class="label" for="weight">Weight (KG):</label>
                    </div>
                    <div id="input">
                        <input type="number" id="weight" step="0.1" name="weight" placeholder="#weight" required>
                    </div>
                </div>
                
                <div id="form-furniture" class="hidden">
                    <div class="outer">
                        <div id="label" class="labelClass">
                            <label class="label" for="height">Height (CM):</label>
                        </div>
                        <div id="input">
                            <input type="number" id="height" step="1" name="height" placeholder="#height" required>
                        </div>
                    </div>
                    <div class="outer">
                        <div id="label" class="labelClass">
                            <label class="label" for="width">Width (CM):</label>
                        </div>
                        <div id="input">
                            <input type="number" id="width" step="1" name="width" placeholder="#width" required>
                        </div>
                    </div>
                    <div class="outer">
                        <div id="label" class="labelClass">
                            <label class="label" for="length">Length (CM):</label>
                        </div>
                        <div id="input">
                            <input type="number" id="length" step="1" name="length" placeholder="#length" required>
                        </div>
                    </div>
                </div>
                <p id="description-products" class="description-products"></p>
                
            </form>

        </div>
        <p id="error-input" class="description-products"></p>

        <!-- Footer Section -->
        <footer>
            <p class="footer-text">Scandiweb Test assignment</p>
        </footer>

        <script src="./javascript/add.js"></script>
    </body>
</html>