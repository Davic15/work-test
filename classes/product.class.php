<?php
    abstract class Product extends Dbh {
        public $name;
        public $sku;
        public $price;
        public $productType;
        //public function __construct($name="", $sku="", $price=0, $productType="") {
        public function __construct($data) {
            $this->name = $data['name'];
            $this->sku = $data['sku'];
            $this->price = $data['price'];
            $this->productType = $data['productType'];
        }

        public function setName($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }

        public function setSku($sku) {
            $this->sku = $sku;
        }
        public function getSku() {
            return $this->sku;
        }

        public function setPricee($price) {
            $this->price = $price;
        }
        public function getPrice() {
            return $this->price;
        }

        public function setProductType($productType) {
            $this->productType = $productType;
        }
        public function getProductType() {
            return $this->productType;
        }

        abstract function addProduct();
        //abstract function checkSku($sku);
    }
?>
