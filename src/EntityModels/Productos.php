<?php
namespace Jsp\Cr\EntityModels;

use Jsp\Cr\EntityModels\EntityModel;

class Productos extends EntityModel
{
    protected $tabla = 'productos';
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $imagen;
    private $fecha_alta;
    private $fecha_modificacion;
    private $estado;
    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
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
    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    public function getImagen()
    {
        return $this->imagen;
    }
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }
    public function getFechaAlta()
    {
        return $this->fecha_alta;
    }
    public function setFechaAlta($fecha_alta)
    {
        $this->fecha_alta = $fecha_alta;
    }
    public function getFechaModificacion()
    {
        return $this->fecha_modificacion;
    }
    public function setFechaModificacion($fecha_modificacion)
    {
        $this->fecha_modificacion = $fecha_modificacion;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
}
