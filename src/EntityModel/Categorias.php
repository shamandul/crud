<?php

namespace Jsp\Cr\EntityModel;

class Categorias
{
    private $id;
    private $categoria;
    private $descripcion;

    public function __construct($id, $categoria = '', $descripcion = '')
    {
        $this->id = $id;
        $this->categoria = $categoria;
        $this->descripcion = $descripcion;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
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
