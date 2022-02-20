<?php
    /** 
     * Class DeleteProducts
     * It extends the Dhb class.
     * 
     * Method deleteProductsCheck
     * Delete from the database the products that the user selected.
     * 
     * @param $array
     * It gets an array of objects to delete.
     * 
    */
    class DeleteProducts extends Dbh {
        public function deleteProductsCheck($array) {
            foreach ($array as $id) {
                $stmt = $this->connect()->prepare('DELETE From products WHERE id=' .$id)->execute();
            }
        }
    }