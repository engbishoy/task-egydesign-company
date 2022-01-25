<?php // this structure is very important as it influences the results of the autocomplete directly
return[
    'resources' => [
        'employee' => [
            'title' => "employee", // main title in the autocomplete for this module
            'actions' => [
                'title' => "Actions",
                'view' => [
                    'title' => "reading",
                    'description' => "Allows you to read and consult the list of Companies"
                ],
                'add' => [
                    'title' => "addition",
                    'description' => "Allows to add a employee"
                ],
                'edit' => [
                    'title' => "edit",
                    'description' => "Allows to make changes to employee"
                ],
                'delete' => [
                    'title' => "deletion",
                    'description' => "Allows to delete the employee"
                ],
                'export' => [
                    'title' => "export",
                    'description' => "Allows the export of the employee table"
                ],

                'view_trash' => [
                    'title' => "consult_trash",
                    'description' => "Allows you to consult the list of Deleted Companies"
                ],
                'restore' => [
                    'title' => "recover",
                    'description' => "Allows to retrieve the Companies"
                ],
                'hard_delete' => [
                    'title' => "permanent_deletion",
                    'description' => "Allows to permanently delete the employee"
                ],
                
            ],
        ],
    ],
    
];