<?php 

class Database {
    
    protected $connection;
    protected $stmt;


    public function connect () {
        $host = 'localhost';
        $dbname = 'notes_app';
        $user = 'root';
        $password = 'root';

        try {
            $this -> connection = new PDO(
                'mysql:host='.$host.';dbname='.$dbname, 
                $user,
                $password 
            );

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection;
        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function closeConnection () {
        return $this->connection = null;
    }
    
}
