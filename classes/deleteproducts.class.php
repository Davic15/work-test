<?php
    class DeleteProducts extends Dbh {
        public function deleteProductsCheck($array) {
            foreach ($array as $id) {
                $stmt = $this->connect()->prepare('DELETE From products WHERE id=' .$id)->execute();
            }
        }
    }