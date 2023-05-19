<?php
class CreateRolesTable {
    public static function rolesTable($pdo) {
        try {
            $query = "CREATE TABLE IF NOT EXISTS roles(
                role_id VARCHAR(32) PRIMARY KEY,
                role_name VARCHAR(255) UNIQUE,
                description VARCHAR(255) 
            )";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
        } catch ( \Throwable $th) {
            die($th->getMessage());
        }
    }

    public static function insertDefaultRoles($pdo, $roles, $unique_string) {
        try {
            $query = "INSERT IGNORE INTO roles(
                role_id,
                role_name,
                description
            ) VALUES (
                :role_id,
                :role_name,
                :description
            )";

            $stmt = $pdo->prepare($query);
            foreach( $roles as $role):
                $role_id = md5($unique_string . microtime(true));

                $stmt->bindParam(':role_id', $role_id);
                $stmt->bindParam(':role_name', $role['name']);
                $stmt->bindParam(':description', $role['description']);

                $stmt->execute();
            endforeach;
        } catch ( \Throwable $th) {
            die($th->getMessage());
        }

    }
}