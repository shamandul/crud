<?php
namespace Jsp\Cr\Controllers;

use Jsp\Cr\Controllers\IController;

class CategoriasController implements IController
{
    public static function listar()
    {
        return [
            'view' => 'categorias/listado.php'
        ];
    }
    public static function nuevo()
    {
        return [
            'view' => 'categorias/form.php'
        ];
    }
    public static function editar()
    {
        return [
            'view' => 'categorias/form.php'
        ];
    }
    public static function borrar()
    {
        return 'método delete';
    }
}
