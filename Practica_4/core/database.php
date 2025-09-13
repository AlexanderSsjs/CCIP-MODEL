<?php class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {    
        
        $dsn =  "mysql:host=" . DB_HOST .
                ";dbname=" . DB_NAME .
                ";charset=". DB_CHARSET;

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,      // Manejo de errores
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Modo de obtención de datos
            PDO::ATTR_EMULATE_PREPARES => false,        // Desactivar emulación de sentencias preparadas
        ];
        try {
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            //Muestra un error si no se puede conectar a la base de datos
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    } 
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Obtiene la instancia de la base de datos
    public function getConnection() {
        return $this->pdo;
    }
} 
?>
