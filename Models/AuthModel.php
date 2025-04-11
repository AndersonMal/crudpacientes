<?php
require_once "../Config/connection.php";

class AuthModel {
    private $db;

    public function __construct() {
        $this->db = (new connection())->connect();
    }

    public function getAdmin($usuario) {
        $sql = "SELECT * FROM users WHERE usuario = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$usuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
