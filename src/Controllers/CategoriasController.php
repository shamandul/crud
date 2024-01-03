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
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $categoria = new Categorias();
            $cols_name = "nombre, descripcion";
            $values_name = ":nombre, :descripcion";
            $replace = [
                ':nombre' => $_POST['nombre'],
                ':descripcion' => $_POST['descripcion']
            ];
            $categoria->insert($cols_name, $values_name, $replace);
            header('Location: /categorias');
            die();
        }

        return [
            'view' => 'categorias/form.php',
            'form' => [
                'title' => 'Nueva categoría',
                'btn' => 'Guardar',
                'action' => '/categorias/nuevo'
            ]
        ];
    }
    public static function editar()
    {
        $id = $_GET['id'];
        $categoria = new Categorias();
        $actual = $categoria->find($id);

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $categoria = new Categorias();
            $columns = "nombre = :nombre, descripcion = :descripcion";
            $replace = [
                ':nombre' => $_POST['nombre'],
                ':descripcion' => $_POST['descripcion'],
                ':id' => $id
            ];
            $categoria->update($columns, $replace);
            header('Location: /categorias');
            die();
        }

        return [
            'view' => 'categorias/form.php',
            'form' => [
                'title' => 'Editar categoría',
                'btn' => 'Actualizar',
                'action' => '/categorias/editar/'.$id,
                'values' => $actual
            ]
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
