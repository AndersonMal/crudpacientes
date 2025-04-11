<?php
require_once "Config/connection.php";

class PatientModel {
    private $db;

    public function __construct() {
        $this->db = (new connection())->connect();
    }

    public function createPatient($data) {
        $sql = "INSERT INTO paciente (nombre1, nombre2, apellido1, apellido2, numero_documento, tipo_documento_id, correo, genero_id, departamento_id, municipio_id)
        VALUES (:pnombre, :snombre, :papellido, :sapellido, :documento, :tipodocumento, :correo, :genero, :departamento, :municipio)";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute($data);
    }

    public function getAll() {
        $sql = "SELECT * FROM paciente";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getById($id){
        $stmt = $this->db->prepare("SELECT * FROM paciente WHERE idPaciente = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updatePatient($id, $data) {
        $sql = "UPDATE paciente SET 
            nombre1 = :pnombre,
            nombre2 = :snombre,
            apellido1 = :papellido,
            apellido2 = :sapellido,
            numero_documento = :documento,
            tipo_documento_id = :tipodocumento,
            correo = :correo,
            genero_id = :genero,
            departamento_id = :departamento,
            municipio_id = :municipio
            WHERE idPaciente = :idPaciente";
    
        $stmt = $this->db->prepare($sql);
        $data['idPaciente'] = $id;
    
        return $stmt->execute($data);
    }
    
    public function deleteById($id) {
        $stmt = $this->db->prepare("DELETE FROM paciente WHERE idPaciente = ?");
        return $stmt->execute([$id]);
    }
    
    

}
