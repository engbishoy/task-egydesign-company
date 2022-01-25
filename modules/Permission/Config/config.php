<?php

use Illuminate\Support\Facades\Lang;

return [
    'name' => 'Permission',
    'menus' => [
        'back_menus' => [
            'role' => [ // support many menus per module
                'title' => Lang::get('permission::menus.main_title'),
                'icon' => 'fas fa-pencil',
                'order' => 6,
                'permissions' => ['role.actions.view'], // here you put all sub items permissions
                'sub_menu' => [
                    'item_1' => [
                        'title' => Lang::get('permission::menus.sub_title_1'),
                        'route' => 'roles.index',
                        'permissions' => 'role.actions.view',
                    ],
                ]
            ],
        ]
    ],
    'permissions' => [
        'resources' => [
            'role' => [
                'actions' => [
                    'view','add','edit','delete','export'
                ],
            ],
        ]
    ]
];
