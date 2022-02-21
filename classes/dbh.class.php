<?php
    /** 
     * Class Dbh.
     * It handles the connection with the database
     * 
     * Method connect
     * Set the parameters to connect to the database.
     * @return $dbh
     *  The connection is retured if it was ok.
    */
    class Dbh {
        public function connect() {
            try {
                /*
                $username = "root";
                $password = "";
                $dbh = new PDO('mysql:host=localhost;dbname=scandiweb_test' , $username, $password);*/
                $username = "id18481727_root";
                $password = "@xT&}J}xIOk*MA5R";
                $dbh = new PDO('mysql:host=localhost;dbname=id18481727_scandiweb_test' , $username, $password);
                return $dbh;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br />";
                die();
            }
        }
    }