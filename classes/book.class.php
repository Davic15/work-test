<?php
    class Book extends Product {
        public $weight;

        public function __construct($data) {
            Parent::__construct($data);
            $this->weight = $data['weight'];
        }

        public function addProduct() {
            $stmt = $this->connect()->prepare("
                INSERT INTO products (
                    sku, name, price, productType, specification
                )
                VALUES (
                    '" . $this->sku . "',
                    '" . $this->name . "',
                    '" . $this->price . "',
                    '" . $this->productType . "',
                    'Weight (KG): " . $this->weight . "')");
            if(!$stmt->execute()) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            return true;
        }
    }
?>