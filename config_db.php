
<?php
    $host = 'localhost';
    $db   = 'bd_local';
    $user = 'root';
    $pass = 'Caracas_1967';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}