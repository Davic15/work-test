<?php
    class GetDeleteProducts {
        private $connection;
        public function __construct() {
            $this->connection = new ConnectionDataBase;
        }

        public function getProducts() {
            $this->connection->query("SELECT * FROM products");
            $result = $this->connection->resultSet();
            return $result;
        }

        public function deleteProducts($array) {
            foreach($array as $id) {
                $this->connection->query("DELETE FROM products WHERE id=" . $id);
                $this->connection->execute();
            }
        }
    }
?>