<?php
class Database {
    public $connection;

    public function __construct($config)
    {
        $dsn = 'mysql:' .  http_build_query($config, '', ';');
        $db_user = 'robert';
        $db_ps = 'robert';

        $this -> connection = new PDO($dsn, $db_user, $db_user);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}