<?php
class Admin {
    private $table = 'admin';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function authenticate($username, $password) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama = :username AND password = :password');
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);
        return $this->db->single();
    }
}
