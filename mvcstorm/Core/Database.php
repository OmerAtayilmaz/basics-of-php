<?php

namespace Core;
use PDOStatement;
use PDO;

class Database {

    private $connection;

    public function __construct($config, $username = 'root' , $password = ''){

        $dsn = 'mysql:' . http_build_query($config,'',';');

        $this->connection = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = []): bool|PDOStatement
    {

        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }


}