<?php
namespace Jsp\Cr\Controllers;

use Jsp\Cr\Controllers\IController;

class CategoriasController implements IController
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