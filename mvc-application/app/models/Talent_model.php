<?php
    class Talent_model {
        private $table = "talent";
        private $db;
        
        public function __construct() {
            $this->db = new Database;
        }
        
        public function talentList() {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }
        
        public function talentDetail ($id) {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }
    }
?>