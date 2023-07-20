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
        
        public function newTalent ($data) {
            $query = "INSERT INTO talent (id, name_, birthdate_, birthplace_, occupation_, nationality_) VALUES (:id, :name_, :birthdate_, :birthplace_, :occupation_, :nationality_)";
            
            $this->db->query($query);
            $this->db->bind('id', $data['id']);
            $this->db->bind('name_', $data['name']);
            $this->db->bind('birthdate_', $data['birthdate']);
            $this->db->bind('birthplace_', $data['birthplace']);
            $this->db->bind('occupation_', $data['occupation']);
            $this->db->bind('nationality_', $data['nationality']);
            
            $this->db->execute();
            
            return $this->db->rowCount();
        }
    }
?>