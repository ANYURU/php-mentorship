<?php 
class User extends Database {
    public $id;
    public $name;

    protected function getUser ($id) {
        $sql = "SELECT  * FROM users WHERE users_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $this->closeConnection();
    }

    protected function getUsers () {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $this->closeConnection();
    }

}