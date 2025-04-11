<?php
$c = isset($_GET['c']) ? $_GET['c'] : 'Patient';
$a = isset($_GET['a']) ? $_GET['a'] : 'index';

$controllerFile = "Controllers/{$c}Controller.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;

    $controllerClass = $c . "Controller";

    if (class_exists($controllerClass)) {
        $controller = new $controllerClass();

        if (method_exists($controller, $a)) {
            call_user_func([$controller, $a]);
        } else {
            echo "Método '$a' no encontrado en el controlador '$controllerClass'.";
        }
    } else {
        echo "Controlador '$controllerClass' no encontrado.";
    }
} else {
    echo "Archivo del controlador '$controllerFile' no encontrado.";
}
