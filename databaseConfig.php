<?php 
    class DatabasePDOConfig{
        private $connection;

        private $host = "localhost";
        private $username = "root";
        private $dbName = "evote";
        private $password = "";
        private function createConnection(){
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        protected function getConnection(){
            $this->createConnection();
            return $this->connection;
        }


    }

?>