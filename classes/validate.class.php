<?php
    class Validate extends Dbh {
        public function validateSku($sku) {
            $stmt = $this->connect()->prepare('SELECT sku FROM products WHERE sku=' .$sku);
            /* This if controls if the stmt fails or not. */
            if(!$stmt->execute()) {
                $stmt = null;
                echo ("Sku taken");
                exit();
            }
            /* This if controls if the sku is taken or not. */
            $resultCheck;
            if($stmt->rowCount() > 0) {
                $resultCheck = false;
            }  else {
                $resultCheck = true;
            }
            return $resultCheck;
        }
    }