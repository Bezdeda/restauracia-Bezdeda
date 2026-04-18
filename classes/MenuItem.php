<?php

require_once 'Database.php';

class MenuItem
{
    private PDO $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM menu_items ORDER BY id DESC";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll();
    }
}