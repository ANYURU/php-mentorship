<?php

class CreatePermissionsTable {
    public static function permissionsTable($pdo) {
        try {
            $query = "CREATE TABLE IF NOT EXISTS permissions (
                permission_id VARCHAR(32) PRIMARY KEY,
                role_id VARCHAR(32),
                permission_name VARCHAR(255),
                FOREIGN KEY (role_id) REFERENCES roles(role_id)
              )";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
        } catch ( \Throwable $th) {
            die($th->getMessage());
        }
    }
}