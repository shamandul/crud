<?php
namespace Jsp\Cr\Controllers;

use Jsp\Cr\Controllers\IControllers;

class ProductosController implements IController
{
    public static function listar()
    {
        return [
            'view' => 'productos/listado.php'
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
