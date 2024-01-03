<?php
namespace Jsp\Cr\Controllers;

use Jsp\Cr\Controllers\IControllers;
use Jsp\Cr\EntityModels\Productos;

class ProductosController implements IController
{
    public static function listar()
    {
        $productos = new Productos();
        $listado = $productos->all();

        return [
            'view' => 'productos/listado.php',
            'listado' => $listado
        ];
    }
    public static function nuevo()
    {
        return [
            'view' => 'productos/form.php'
        ];
    }
    public static function editar()
    {
        return [
            'view' => 'productos/form.php'
        ];
    }
    public static function borrar()
    {
        return 'método delete';
    }
}
