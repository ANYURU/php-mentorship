<?php

$config = require "config.php";
require "database/Connection.php";
require "database/migrations/CreateUsersTable.php";
require "database/migrations/CreateRolesTable.php";
require "database/migrations/CreatePermissionsTable.php";
require "database/migrations/CreateNotesTable.php";
require "database/migrations/CreateUserNotesPermissionsTable.php";
function migrate( $config ) {
    
    $pdo = Connection::make($config['database']);
    
    CreateUsersTable::usersTable($pdo);
    CreateRolesTable::rolesTable($pdo);
    CreatePermissionsTable::permissionsTable($pdo);
    CreateNotesTable::notesTable($pdo);
    CreateUserNotesPermissionsTable::userNotesPermissionsTable($pdo);
    CreateRolesTable::insertDefaultRoles($pdo, $config['roles'], $config['unique_string']);

}

migrate( $config );
