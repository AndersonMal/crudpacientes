<?php
require_once "Models/PatientModel.php";

class PatientController {
    private $model;

    public function __construct() {
        $this->model = new PatientModel();
    }

    public function index() {
        $pacientes = $this->model->getAll();
        include "Views/Patients/index.php";
    }

    public function save() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['idPaciente'] ?? null;
    
            $data = [
                'pnombre' => $_POST['pnombre'],
                'snombre' => $_POST['snombre'],
                'papellido' => $_POST['papellido'],
                'sapellido' => $_POST['sapellido'],
                'documento' => $_POST['documento'],
                'tipodocumento' => $_POST['tipodocumento'],
                'correo' => $_POST['correo'],
                'genero' => $_POST['genero'],
                'departamento' => $_POST['departamento'],
                'municipio' => $_POST['municipio']
            ];
    
            if ($id) {
                $resultado = $this->model->updatePatient($id, $data);
                $status = $resultado ? "updated" : "error";
            } else {
                $resultado = $this->model->createPatient($data);
                $status = $resultado ? "created" : "error";
            }
    
            header("Location: /crudpacientes/index.php?status={$status}");
            exit;
        }
    }
    

    public function edit(){
        $id = $_GET['id'] ?? null;

        if ($id) {
            $paciente = $this->model->getById($id);
            require_once "Views/Patients/Edit.php";
        } else {
            // Redireccionar o mostrar error si no hay id
            header("Location: ../../index.php?c=Patient&a=index");
        }
    }

    public function delete() {
        $id = $_GET['id'] ?? null;
    
        if ($id) {
            $resultado = $this->model->deleteById($id);
    
            if ($resultado) {
                header("Location: index.php?c=Patient&a=index&deleted=1");
                exit();
            } else {
                echo "Error al eliminar el paciente.";
            }
        } else {
            header("Location: index.php?c=Patient&a=index");
        }
    }
    


}
