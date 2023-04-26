<?php 
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

class Database {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $connection;

    protected function connect() {

        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'notes_app';

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $this->connection = $conn;
        return $conn;
    }

    protected function closeConnection() {
        return $this->connection->close();
    }

}