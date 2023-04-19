<?php 
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

class Database {
    private $dotenv;
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $connection;

    public function __construct() {
        $this->host = $_ENV['DB_HOST'];
        $this->username = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->dbname = $_ENV['DB_NAME'];

        // Connect to the database
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        // Check connection
        if ( $this->connection->connect_error ) {
            die('Database connection failed: '. $this->connection->connect_error);
        }   
    }

    
    public function getConnection() {
        return $this->connection;  
    }

    public function closeConnection() {
        $this->connection->close();
    }

}