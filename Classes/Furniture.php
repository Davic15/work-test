<?php
    class Furniture extends Product {
        public $height;
        public $width;
        public $length;
        public $connection;

        public function __construct($data) {
            $this->connection = new Connection;
            Parent::__construct($data);
            $this->height = $data["height"];
            $this->width = $data["width"];
            $this->length = $data["length"];

        }

        public function addProduct() {
            $this->connection->query("
                INSERT INTO products (
                    sku, name, price, productType, specification
                )
                VALUES (
                    '" . $this->sku . "',
                    '" . $this->name ."',
                    '" . $this->price ."',
                    '" . $this->productType ."',
                    'Dimension: " . $this->height . "x" . $this->width . "x" . $this->length . "')"
            );
            return $this->connection->execute() ? true : false;
        }
    }
?>