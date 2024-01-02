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
    public function insert($post)
    {
        $this->connect();
        $stmt = $this->pdo->prepare('INSERT INTO categorias (nombre, descripcion) VALUES (:nombre, :descripcion)');
        $stmt->execute([
            ':nombre' => $post['nombre'],
            ':descripcion' => $post['descripcion']
        ]);
    }
    public function update($post, $id)
    {
        $this->connect();
        $stmt = $this->pdo->prepare('UPDATE categorias SET nombre = :nombre, descripcion = :descripcion WHERE id = :id');
        $stmt->execute([
            ':nombre' => $post['nombre'],
            ':descripcion' => $post['descripcion'],
            ':id' => $id
        ]);
    }
    public function find($id)
    {
        $this->connect();
        $stmt = $this->pdo->prepare('SELECT * FROM categorias WHERE id = :id');
        $stmt->execute([':id'=> $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Categorias::class);
        return $stmt->fetch();
    }
    public function delete($id)
    {
        $this->connect();
        $stmt = $this->pdo->prepare('DELETE FROM categorias WHERE id = :id');
        $stmt->execute([':id'=> $id]);
        header("Location: /categorias");
    }
}
