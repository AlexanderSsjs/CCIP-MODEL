<?php
require_once __DIR__ . '/../core/config.php';
require_once __DIR__ . '/../core/database.php';

try {
    Database::getInstance()->getConnection();
    echo "Conexión a la base de datos exitosa.";
} catch (PDOException $e) {
    echo "Error de conexión a la base de datos: " . $e->getMessage();
}
?>
