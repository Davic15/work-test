<?php
    class Book extends Product {
        public $weight;
        public $connection;

        public function __construct($data) {
            $this->connection = new Connection;
            Parent::__construct($data);
            $this->weigth = $data["weight"];
        }

        public function addProduct() {
            $this->connection->query("
                INSERT INTO products (
                    sku, name, price, productType, specification
                )
                VALUES (
                    '" . $this->sku . "',
                    '" . $this->name . "',
                    '" . $this->price . "',
                    '" . $this->productType . "',
                    'Weight (KG): " . $this->weight . "')"
            );
            return $this->connection->execute() ? true : false;
        }
    }

?>