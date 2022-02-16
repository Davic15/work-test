<?php

class LoadProducts extends Dbh {
    public function getProducts() {
        $stmt = $this->connect()->prepare('SELECT * From products');
        if(!$stmt->execute()) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        return $stmt->fetchAll(PDO::FETCH_OBJ);
        //return $stmt->fetch(PDO::FETCH_CLASS, "product");
    }
}