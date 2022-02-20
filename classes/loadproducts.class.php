<?php
    /** 
     * Class LoadProducts, 
     * Extends the Dbh Class.
     * It selects all the product to be displayed in the main screen
     * 
     * Method getProducts
     * Select information from the database.
     * @return $stmt
     *  Set of objects if the query is ok.
    */
    class LoadProducts extends Dbh {
        public function getProducts() {
            $stmt = $this->connect()->prepare('SELECT * From products');
            if(!$stmt->execute()) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }