<?php
namespace Jsp\Cr\Controllers;

interface IController
{
    public function getAll();
    public function find($id);
    public function update();
    public function delete($id);
}
