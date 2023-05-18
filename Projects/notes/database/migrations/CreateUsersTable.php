<?php

class CreateUsersTable {
    public static function usersTable($pdo) {
        try {
            $query = "CREATE TABLE IF NOT EXISTS users(
                user_id VARCHAR(32) PRIMARY KEY,
                user_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                user_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                user_fullname VARCHAR(255),
                user_email VARCHAR(255) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                user_avatar VARCHAR(255),
                user_online_status BOOLEAN DEFAULT FALSE
            )";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
        } catch ( \Throwable $th) {
            die($th->getMessage());
        }
    }
}