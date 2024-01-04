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
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $procucto = new Productos();
            $cols_name = "nombre, descripcion, precio, fecha_alta, fecha_modificacion, estado";
            $values_name = ":nombre, :descripcion, :precio, :fecha_alta, :fecha_modificacion, :estado";
            $replace = [
                ':nombre' => $_POST['nombre'],
                ':descripcion' => $_POST['descripcion'],
                ':precio' => $_POST['precio'],
                ':fecha_alta' => date("Y/m/d H:i:s"),
                ':fecha_modificacion' => date("Y/m/d H:i:s"),
                ':estado' => $_POST['estado']

            ];
            $procucto->insert($cols_name, $values_name, $replace);
            header('Location: /productos');
            die();
        }

        return [
            'view' => 'productos/form.php',
            'form' => [
                'title' => 'Nuevo producto',
                'btn' => 'Guardar',
                'action' => '/productos/nuevo'
            ]
        ];
    }
    public static function editar()
    {
        $id = $_GET['id'];
        $producto = new Productos();
        $actual = $producto->find($id);

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $producto = new Productos();
            $columns = "nombre = :nombre, descripcion = :descripcion, precio = :precio, fecha_modificacion = :fecha_modificacion, estado = :estado";
            $replace = [
                ':nombre' => $_POST['nombre'],
                ':descripcion' => $_POST['descripcion'],
                ':precio' => $_POST['precio'],
                ':fecha_modificacion' => date("Y/m/d H:i:s"),
                ':estado' => intval($_POST['estado']),
                ':id' => $id
            ];
            $producto->update($columns, $replace);
            header('Location: /productos');
            die();
        }

        return [
            'view' => 'productos/form.php',
            'form' => [
                'title' => 'Editar productos',
                'btn' => 'Actualizar',
                'action' => '/productos/editar/'.$id,
                'values' => $actual
            ]
        ];
    }
    public static function borrar()
    {
        return 'método delete';
    }
}
