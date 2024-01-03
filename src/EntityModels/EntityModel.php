<?php
namespace Jsp\Cr\EntityModels;

use PDO;

class EntityModel
{
    protected $pdo;
    protected $tabla = 'tbl';
    public function connect()
    {
        $server = 'mysql:host='. DBHOST .';dbname='.DBNAME.';charset='.DBCHARSET;
        $pdo = new PDO($server, DBUSER, DBPASSWORD);
        $this->pdo = $pdo;
    }
    public function all()
    {
        $this->connect();
        $query = "SELECT * FROM $this->tabla";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this));
        return $stmt->fetchAll();
    }
    public function insert($cols_name, $values_name, $replace)
    {
        $this->connect();
        $query = "INSERT INTO $this->tabla ($cols_name) VALUES ($values_name)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($replace);
    }
    public function update($columns, $replace)
    {
        $this->connect();
        $query = "UPDATE $this->tabla SET $columns WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($replace);
    }
    public function find($id)
    {
        $this->connect();
        $query = "SELECT * FROM $this->tabla WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id'=> $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this));
        return $stmt->fetch();
    }
    public function delete($id)
    {
        $this->connect();
        $query = "DELETE FROM $this->tabla WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id'=> $id]);
        header("Location: /categorias");
    }
}
