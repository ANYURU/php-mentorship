<?php

class CreateNotesTable {
    public static function notesTable($pdo) {
        try {
            $query = "CREATE TABLE IF NOT EXISTS notes (
                note_id VARCHAR(32) PRIMARY KEY,
                title VARCHAR(255),
                content TEXT,
                creator_id VARCHAR(32),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
              )";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
        } catch ( \Throwable $th) {
            die($th->getMessage());
        }
    }
}