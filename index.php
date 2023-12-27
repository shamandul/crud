<?php
include_once('./vendor/autoload.php');
include_once('./src/utils/config.php');

ini_set('display_errors', 1);
error_reporting(E_ALL);

$entidad = $_GET['e'] ?? 'productos';
$accion = $_GET['a'] ?? 'listar';

$entidad = ucfirst(strtolower($entidad));
$clase = 'Jsp\\Cr\\Controllers\\' . $entidad .'Controller';
if (!class_exists($clase)) {
    die('Clase no existe ' . $clase);
}

if (!method_exists($clase, $accion)) {
    die('No existe el metodo ' . $accion . ' en la clase ' . $clase);
}


$respuesta = $clase::$accion();
$archivo = $respuesta['view'];

include(VIEWS . '/inc/header.php');
include(VIEWS . '/' . $archivo);
include(VIEWS. '/inc/footer.php');
