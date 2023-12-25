<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$entidad = $_GET['e'] ?? 'productos';
$accion = $_GET['a'] ?? 'listado';


if (!is_dir('src/views/' . $entidad)) {
    $entidad = 'productos';
}
$archivo = 'listado.php';
if (in_array($accion, ['alta', 'edit'])) {
    $archivo = 'form.php';
}

include('src/views/inc/header.php');
include('src/views/' . $entidad . '/' . $archivo);
include('src/views/inc/footer.php');
