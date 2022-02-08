<?php
    class Connection {
        private $dbHost     = "localhost";
        private $dbUsername = "root";
        private $dbPassword = "";
        private $dbName     = "scandiweb_test";

        public $statement;
        private $dbHandler;
        private $error;

        public function __construct() {
            $conn = "mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName;
            $option = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try {
                $this->dbHandler = new PDO($conn, $this->dbUsername, $this->dbPassword, $option);
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        public function query($sql) {
            $this->statement = $this->dbHandler->prepare($sql);
        }

        public function execute() {
            return $this->statement->execute();
        }

        public function resultSet() {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        public function single() {
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }

    }