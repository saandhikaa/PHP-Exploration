<?php
    class Pacar_model {
        private $table = "pacarku";
        private $db;
        
        public function __construct() {
            $this->db = new Database;
        }
        
        public function daftarPacar() {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }
    }
?>