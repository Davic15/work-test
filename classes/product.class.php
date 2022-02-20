<?php
    /** 
     * Class Product.
     * It contains the basic informaion about the product..
     * Extends the Dhb Class.
     * 
     * Method addProduct (abstract).
     * Insert data into the database.
    */
    abstract class Product extends Dbh {
        public $name;
        public $sku;
        public $price;
        public $productType;
        public function __construct($data) {
            $this->name = $data['name'];
            $this->sku = $data['sku'];
            $this->price = $data['price'];
            $this->productType = $data['productType'];
        }

        abstract function addProduct();
    }
?>
