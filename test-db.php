<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'classes/Database.php';

try {
    $database = new Database();
    $connection = $database->connect();

    echo "Pripojenie k databáze bolo úspešné.";
} catch (PDOException $e) {
    echo "Chyba pripojenia: " . $e->getMessage();
}