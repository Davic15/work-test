<?php
    /** 
     * Class Validate.
     * Valite if the sku value is unique for a product.
     * Extends the Dhb Class.
     * 
     * Method validateSku
     * @param $sku
     * Get the possible value if the sku is unique.
     * @return $resultCheck
     *  It returns 0 if the value is unique or 1 if the sku is already taken.
    */
    class Validate extends Dbh {
        public function validateSku($sku) {
            $stmt = $this->connect()->prepare('SELECT sku FROM products WHERE sku=?');
            if(!$stmt->execute(array($sku))) {
                $stmt = null;
                echo ("Sku taken");
                exit();
            }
            $resultCheck;
            if($stmt->rowCount() > 0) {
                $resultCheck = false;
            }  else {
                $resultCheck = true;
            }
            return $resultCheck;
        }
    }