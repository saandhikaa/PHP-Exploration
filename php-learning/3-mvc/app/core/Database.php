<?php
    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $db_name = DB_NAME;
        
        private $dbh, $stmt;
        
        public function __construct() {
            // dsn = data source name
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
            $option = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            
            try {
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
    }
?>