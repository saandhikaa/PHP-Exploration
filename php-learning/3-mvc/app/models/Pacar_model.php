<?php
    class Pacar_model {
        private $dbh;   // datanase handler
        private $stmt;  // statement 
        
        public function __construct() {
            $dsn = 'mysql:host=127.0.0.1:3306;dbname=phpmvc';  // data source name
            
            try {
                $this->dbh = new PDO($dsn, 'root', '');
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        
        public function daftarPacar() {
            $this->stmt = $this->dbh->prepare('SELECT * FROM pacarku');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>