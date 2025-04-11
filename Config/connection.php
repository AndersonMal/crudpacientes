<?php
class connection {
    private $host = "localhost";
    private $db = "pruebasinergia";
    private $user = "root";
    private $pass = "root";
    private $charset = "utf8";

    public function connect() {
        try {
            $conexion = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            return new PDO($conexion, $this->user, $this->pass, $opciones);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit;
        }
    }
}
?>
