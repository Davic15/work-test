<?php
    class DVD extends Products {
        public $size;
        public $connection;

        public function __construct($data) {
            $this->connection = new ConnectionDataBase;
            Parent::__construct($data);
            $this->size = $data["size"];
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
                    'Size (MB): " . $this->size . "')"
            );
            return $this->connection->execute() ? true : false;
        }
    }
?>