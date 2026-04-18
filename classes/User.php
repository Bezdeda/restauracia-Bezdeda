<?php

require_once 'Database.php';

class User
{
    private PDO $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function findByUsername(string $username): array|false
    {
        $sql = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            ':username' => $username
        ]);

        return $statement->fetch();
    }
}