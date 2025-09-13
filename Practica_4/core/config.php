<?php
//----- Configuración de la base de datos-----//

//Definición de constantes para la conexión a la base de datos
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "practica_4");
define("DB_CHARSET", "utf8mb4");

//----- Configuración de errores -----//
// Mostrar todos los errores (útil para desarrollo, desactivar en producción)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);
?>

