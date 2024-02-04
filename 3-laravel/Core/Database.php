<?php

class Database
{
    public $connection;
    public $statement;

    public function __construct($config)
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $db_user = 'robert';
        $db_ps = 'robert';

        $this->connection = new PDO($dsn, $db_user, $db_user, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort(404);
        }

        return $result;
    }
}