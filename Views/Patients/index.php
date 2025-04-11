<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Lista de Pacientes</h2>
        <a href="/crudpacientes/Views/Patients/Create.php" class="btn btn-primary mb-3" role="button">Agregar Paciente</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numero de documento</th>
                    <th>Tipo de documento</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($pacientes as $pac): ?>
                        <tr>
                            <td><?= $pac['idPaciente'] ?></td>
                            <td><?= $pac['numero_documento'] ?></td>
                            <td><?= $pac['tipo_documento_id'] ?></td>
                            <td><?= $pac['nombre1'] . " " . $pac['nombre2'] ?></td>
                            <td><?= $pac['apellido1'] . " " . $pac['apellido2'] ?></td>
                            <td><?= $pac['correo'] ?></td>
                            <td>
                                <a href="index.php?c=Patient&a=edit&id=<?= $pac['idPaciente'] ?>" class="btn btn-primary btn-sm">Editar</a>
                                <a href="index.php?c=Patient&a=delete&id=<?= $pac['idPaciente'] ?>" class="btn btn-danger btn-sm btn-eliminar">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                        
            </tbody>
        </table>
    </div>

    <script src="/crudpacientes/assets/js/Patients.js"></script>
</body>
</html>
