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
        $sql = "SELECT * FROM menu_items ORDER BY id ASC";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll();
    }

    public function getById(int $id): array|false
    {
        $sql = "SELECT * FROM menu_items WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->execute([':id' => $id]);
        return $statement->fetch();
    }

    public function create(string $name, string $description, float $price, string $image, string $category): bool
    {
        $sql = "INSERT INTO menu_items (name, description, price, image, category)
                VALUES (:name, :description, :price, :image, :category)";

        $statement = $this->connection->prepare($sql);

        return $statement->execute([
            ':name' => $name,
            ':description' => $description,
            ':price' => $price,
            ':image' => $image,
            ':category' => $category
        ]);
    }

    public function update(int $id, string $name, string $description, float $price, string $image, string $category): bool
    {
        $sql = "UPDATE menu_items 
                SET name = :name, description = :description, price = :price, image = :image, category = :category
                WHERE id = :id";

        $statement = $this->connection->prepare($sql);

        return $statement->execute([
            ':id' => $id,
            ':name' => $name,
            ':description' => $description,
            ':price' => $price,
            ':image' => $image,
            ':category' => $category
        ]);
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM menu_items WHERE id = :id";
        $statement = $this->connection->prepare($sql);

        return $statement->execute([
            ':id' => $id
        ]);
    }
}