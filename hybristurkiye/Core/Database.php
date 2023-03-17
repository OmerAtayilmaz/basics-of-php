<?php
namespace  Core;
use PDO;

class Database {

    private $connection;
    public function __construct($database){

        $dsn = "mysql:" . http_build_query($database, '', ';');

        $this->connection =  new PDO($dsn, 'root','',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    public  function query($query){
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}