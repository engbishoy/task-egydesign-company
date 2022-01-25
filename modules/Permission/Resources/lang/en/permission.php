<?php // this structure is very important as it influences the results of the autocomplete directly
return[
    'resources' => [
        
'role' => [
    'title' => 'roles', // main title in the autocomplete for this module
    'actions' => [
        'title' => 'Actions',
        'view' => [
            'title' => 'reading',
            'description' => 'Allows to read and consult the list of roles'
        ],
        'add' => [
            'title' => 'addition',
            'description' => 'Allows to add a role'
        ],
        'edit' => [
            'title' => 'edit',
            'description' => 'Allows changes to roles'
        ],
        'delete' => [
            'title' => 'deletion',
            'description' => 'Allows to delete roles'
        ],
        'export' => [
            'title' => 'export',
            'description' => 'Allow role table export'
        ],
    ],
],
],
    
];