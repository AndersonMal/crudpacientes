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
        <h2>Crear paciente</h2>
        <form method="post" action="../../index.php?c=Patient&a=save">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Primer Nombre</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="pnombre" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Segundo Nombre</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="snombre" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Primer Apellido</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="papellido" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Segundo Apellido</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="sapellido" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Documento</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="documento" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tipo de Documento</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="tipodocumento" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Correo</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="correo" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Género</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="genero" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Departamento</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="departamento" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Municipio</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="municipio" value="">
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/crudpacientes" role="button">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

    
    <script src="/crudpacientes/assets/js/Patients.js"></script>
</body>
</html>