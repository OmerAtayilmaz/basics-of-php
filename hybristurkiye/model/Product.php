<?php
namespace Model;
use PDO;

class Product{
    private $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    public function all() {
        return $this->connection->query("select *  from products")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function query($query){
        return $this->connection->query($query);
    }

    public function find($id){
        return $this->connection->query("select * from products where id = 1")->fetch(PDO::FETCH_ASSOC);
    }
}