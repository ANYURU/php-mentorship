<?php 

class Users extends Database {
    public $id;
    public $name;

    // protected function getUser ( $id ) {

    //     echo "{ $id }";
    //     // $sql = "SELECT  * FROM users WHERE users_firstname = ?";
    //     // $stmt = $this->connect()->prepare($sql);
    //     // $stmt->execute([$id]);
    //     // $this->closeConnection();
    // }

    public function getUsers () {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $users;
    }

    

    

    
}