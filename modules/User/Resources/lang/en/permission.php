<?php // this structure is very important as it influences the results of the autocomplete directly
return[
    'resources' => [
        'user' => [
            'title' => 'users', // main title in the autocomplete for this module
            'actions' => [
                'title' => 'Actions',
                
                'view' => [
                    'title' => 'View',
                    'description' => 'Allow view Users'
                ],
                'add' => [
                    'title' => 'Add',
                    'description' => 'Allow add Users'
                ],        
                'edit' => [
                    'title' => 'Edit',
                    'description' => 'Allow edit Users'
                ],        
                'delete' => [
                    'title' => 'delete',
                    'description' => 'Allow delete Users'
                ],
                'export' => [
                    'title' => 'export',
                    'description' => 'Allow export Users'
                ],

                'view_trash' => [
                    'title' => 'View trash',
                    'description' => 'Allow view users trashed'
                ],
                'restore' => [
                    'title' => 'Restore',
                    'description' => 'Allow restore users'
                ],
                'hard_delete' => [
                    'title' => 'Hard delete',
                    'description' => 'Allow hard delete Users'
                ],
            ],
        ],
    ],
    
];