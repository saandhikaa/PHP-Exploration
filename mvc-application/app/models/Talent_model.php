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
        
        public function deleteTalent ($id) {
            $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            
            $this->db->execute();
            
            return $this->db->rowCount();
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
        
        public function editTalent($data) {
            $query = "UPDATE talent SET name_ = :name_, birthdate_ = :birthdate_, birthplace_ = :birthplace_, occupation_ = :occupation_, nationality_ = :nationality_ WHERE id = :id";
            
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
        
        public function searchTalent() {
            $keyword = $_POST['keyword'];
            $query = "SELECT * FROM " . $this->table . " WHERE name_ LIKE :keyword";
            $this->db->query($query);
            $this->db->bind('keyword', "%$keyword%");
            return $this->db->resultSet();
        }
    }
?>