<?php

function database_connection() {
    try {
        $pdo = new PDO('mysql:dbname=gestion-ph;host=localhost', 'root', 'HAMZAsamih123');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Could not connect to the database :" . $e->getMessage());
    }
}

?>