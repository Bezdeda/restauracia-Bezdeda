<?php

require_once 'Database.php';

class Reservation
{
    private PDO $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function create(string $name, string $email, string $reservationDatetime, int $guests, string $note): bool
    {
        $sql = "INSERT INTO reservations (name, email, reservation_datetime, guests, note)
                VALUES (:name, :email, :reservation_datetime, :guests, :note)";

        $statement = $this->connection->prepare($sql);

        return $statement->execute([
            ':name' => $name,
            ':email' => $email,
            ':reservation_datetime' => $reservationDatetime,
            ':guests' => $guests,
            ':note' => $note
        ]);
    }
}