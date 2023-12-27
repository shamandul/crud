<?php
namespace Jsp\Cr\Controller;

use Jsp\Cr\Controller\IController;

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
