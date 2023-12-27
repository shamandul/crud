<?php
namespace Jsp\Cr\Controllers;

use Jsp\Cr\Controller\IControllers;

class ProductosController implements IController
{
    public function getAll()
    {
        return 'método get';
    }
    public function find($id)
    {
        return 'método find';
    }
    public function update()
    {
        return 'método update';
    }
    public function delete($id)
    {
        return 'método delete';
    }
}
