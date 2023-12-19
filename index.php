<?php
$entidad = $_GET['e'];
include('src/views/inc/header.php');
include('src/views/'.$entidad.'/listado.php');
include('src/views/inc/footer.php');
