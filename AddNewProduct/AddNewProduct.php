<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/add.css">
        <title>Scandiweb Test</title>
    </head>
    <body>
        <!-- Navigation bar, it contains the title and two buttons. -->
        <nav>
            <div class="container-nav">
                <h1>Add Product</h1>
                <div class="container-nav_buttons">
                    <button class="btn add">Save</button>
                    <button id="delete-product-btn" name="delete" form="form" class="btn delete">Cancel</button>
                </div>
            </div>
        </nav>

        <!-- Form section -->
        <div class="container-form-add">
            <form id="product_form" action="" method="POST">
                <div class="outer">
                    <div id="label" class="labelClass">
                        <!--<label for="name">Name:</label>-->
                        <label class="label" for="sku">SKU:</label>
                    </div>
                    <div id="input">
                        <!--<input type="text" id="name" class="input" name="name" placeholder="Name">-->
                        <input type="text" id="sku" name="sku" placeholder="#sku" minlength="8" maxlength="8" required><br />
                    </div>
                </div>
                <div class="outer">
                    <div id="label" class="labelClass">
                        <!--<label for="name">Name:</label>-->
                        <label class="label" for="name">Name:</label>
                    </div>
                    <div id="input">
                        <!--<input type="text" id="name" class="input" name="name" placeholder="Name">-->
                        <input type="text" id="name" name="name" placeholder="#name" required><br />
                    </div>
                </div>
                <div class="outer">
                    <div id="label" class="labelClass">
                        <!--<label for="name">Name:</label>-->
                        <label class="label" for="price">Price:</label>
                    </div>
                    <div id="input">
                        <!--<input type="text" id="name" class="input" name="name" placeholder="Name">-->
                        <input type="text" id="price" name="price" placeholder="#price" required><br />
                    </div>
                </div>
                <div class="outer">
                    <div id="label" class="labelClass">
                        <!--<label for="name">Name:</label>-->
                        <label class="label" for="productType">Type Switcher</label>
                    </div>
                    <div id="input">
                        <!--<input type="text" id="name" class="input" name="name" placeholder="Name">-->
                        <select id="productType" name="productType">
                            <option selected disabled>Type Switcher</option>
                            <option value="Dvd" id="Dvd">DVD</option>
                            <option value="Book" id="Book">Book</option>
                            <option value="Furniture" id="Furniture">Furniture</option>
                        </select>
                    </div>
                </div>
                
                
            </form>

        </div>

        <!-- Footer Section -->
        <footer>
            <p class="footer-text">Scandiweb Test assignment</p>
        </footer>
    </body>
</html>