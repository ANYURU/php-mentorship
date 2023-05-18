<?php

return [
        'database' => [
            'host' => 'localhost',
            'dbname' => 'notes_app',
            'user' => 'root',
            'password' => 'root'
        ],
        'roles' => [
            [
                'name' => 'creator',
                'description' => 'This is the creator of the note',
                'permissions' => [ 'view', 'edit', 'comment', 'share', 'delete']
            ],
            [
                'name' => 'editor',
                'description' => 'This is a collaborator on the note',
                'permissions' => [ 'view', 'edit', 'comment' ]
            ], 
            [
                'name' => 'viewer',
                'description' => 'This is a person with only view access on the note',
                'permissions' => [ 'view', 'comment' ]
            ]
        ],
        'unique_string' => 'ad53153e-20f6-4c36-9737-86c61a03aa89'

    ];