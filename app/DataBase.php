<?php

class DataBase
{
    private $PDO;

    public function __construct($dbname = 'cadastro')
    {
        try {
            $this->PDO = new PDO("mysql:host=localhost;dbname={$dbname}", 'root', '');

        } catch (PDOException $e) {
            die("ops, houve um erro: <b>{$e->getMessage()}</b>");
        }
    }

    public function insert($sql, array $binds)
    {

        $stmt = $this->PDO->prepare($sql);

        foreach ($binds as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        }
        return false;

    }


    public function select($sql, array $binds)
    {
        $stmt = $this->PDO->prepare($sql);
        foreach ($binds as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();
        return $stmt;
    }

    public function update($sql, array $binds){
        $stmt = $this->PDO->prepare($sql);
        foreach ($binds as $key => $value){
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();

        return $stmt->rowCount();
    }
    public function delete($sql, array $binds){
        $stmt = $this->PDO->prepare($sql);
        foreach ($binds as $key=> $value){
            $stmt->bindValue($key, $value);

        }
        $stmt->execute();
        return $stmt->rowCount();
    }

}