<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <title>Scandiweb Test</title>
    </head>
    <body>
        <!-- Navigation bar, it contains the title and two buttons. -->
        <nav>
            <div class="container-nav">
                <h1>Product List</h1>
                <div class="container-nav_buttons">
                    <button class="btn add">ADD</button>
                    <button class="btn delete">MASS DELETE</button>
                </div>
            </div>
        </nav>
        
        <!-- Getting products using PHP -->
        <?php 
            require "./Loader/Loader.php";
            /*$products = new FunctionsProducts();
            echo $products->getProducts();*/
            $products = (new FunctionsProducts)->getProducts();
        ?>

        <!--Section, here the products are displayed. -->
        <section>

        </section>

        <!-- Footer, place at the bottom with a paragraph. -->
        <footer>
            <p class="footer-text">Scandiweb Test assignment</p>
        </footer>
    </body>
</html>