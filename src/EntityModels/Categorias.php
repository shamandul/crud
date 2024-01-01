<?php

namespace Jsp\Cr\EntityModels;

use PDO;

class Categorias
{
    private $id;
    private $nombre;
    private $descripcion;
    private $pdo;


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
    public function connect()
    {
        $server = 'mysql:host='. DBHOST .';dbname='.DBNAME.';charset='.DBCHARSET;
        $pdo = new PDO($server, DBUSER, DBPASSWORD);
        $this->pdo = $pdo;
    }
    public function all()
    {
        $this->connect();
        $stmt = $this->pdo->prepare('SELECT * FROM categorias');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Categorias::class);
        return $stmt->fetchAll();
    }
    public function delete($id)
    {
        $this->connect();
        $stmt = $this->pdo->prepare('DELETE FROM categorias WHERE id = :id');
        $stmt->execute([':id'=> $id]);
        header("Location: /categorias");
    }
}
