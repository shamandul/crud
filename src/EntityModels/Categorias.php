<?php

namespace Jsp\Cr\EntityModels;

use PDO;

class Categorias extends EntityModel
{
    private $id;
    private $nombre;
    private $descripcion;
    protected $pdo;
    protected $tabla = 'categorias';


    public function getId()
    {
        return $this->id;
    }
    public function getCategoria()
    {
        return $this->nombre;
    }
    public function setCategoria($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}
