<?php
namespace Jsp\Cr\Controllers;

use Jsp\Cr\Controllers\IController;
use Jsp\Cr\EntityModels\Categorias;

class CategoriasController implements IController
{
    public static function listar()
    {
        $categorias = new Categorias();
        $listado = $categorias->all();

        return [
            'view' => 'categorias/listado.php',
            'listado' => $listado
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
        $id = $_GET['id'];
        $categoria = new Categorias();
        $categoria->delete($id);
        return 'método delete';
    }
}
