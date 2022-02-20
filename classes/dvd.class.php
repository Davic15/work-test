<?php
    /** 
     * Class Dvd.
     * It contains the size of the Dvd (in mb) to be saved.
     * Extends the Product Class.
     * 
     * Method addProduct
     * Insert data into the database.
     * @return true
     *  If the insert was ok.
    */
    class Dvd extends Product {
        public $size;

        public function __construct($data) {
            Parent::__construct($data);
            $this->size = $data["size"];
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
                'Size (MB): " . $this->size . "')");
            if(!$stmt->execute()) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            return true;
        }
    }
