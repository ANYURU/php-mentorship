<?php

class CreateUserNotesPermissionsTable {
    public static function userNotesPermissionsTable($pdo) {
        try {
            $query = "CREATE TABLE IF NOT EXISTS user_note_permission (
                note_id VARCHAR(32),
                permission_id VARCHAR(32),
                user_id VARCHAR(32),
                PRIMARY KEY (note_id, user_id, permission_id),
                FOREIGN KEY (note_id) REFERENCES notes(note_id),
                FOREIGN KEY (user_id) REFERENCES users(user_id),
                FOREIGN KEY (permission_id) REFERENCES permissions(permission_id)
              )";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
        } catch ( \Throwable $th) {
            die($th->getMessage());
        }
    }
}