<?php
    class Furniture extends Product {
        public $height;
        public $width;
        public $length;

        public function __construct($data) {
            Parent::__construct($data);
            $this->height = $data["height"];
            $this->width = $data["width"];
            $this->length = $data["length"];

        }

        public function addProduct() {
            $stmt = $this->connect()->prepare("
            INSERT INTO products (
                sku, name, price, productType, specification
            )
            VALUES (
                '" . $this->sku . "',
                '" . $this->name ."',
                '" . $this->price ."',
                '" . $this->productType ."',
                'Dimension: " . $this->height . "x" . $this->width . "x" . $this->length . "')");
            if(!$stmt->execute()) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            return true;
        }
    }
?>