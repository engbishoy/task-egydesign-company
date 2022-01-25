<?php

use Illuminate\Support\Facades\Lang;

return [
    'name' => 'Employee',
    'menus' => [
        'back_menus' => [ // support many menus per module
            'employee' => [
                'title' => Lang::get('employee::menu.main_title'),
                'icon' => 'fas fa-user-friends',
                'order' => 4,
                'permissions' => ['employee.actions.view'], // here you put all sub items permissions
                'sub_menu' => [
                    'item_1' => [
                        'title' => Lang::get('employee::menu.sub_title_1'),
                        'route' => 'employee.index',
                        'permissions' => 'employee.actions.view',
                    ]
                ]
            ]
        ]
    ],
    'permissions' => [
        'resources' => [
            'employee' => [
                'actions' => [
                    'view','add','edit','delete','export','view_trash','restore','hard_delete','control'
                ],
            ],
        ]
    ]
];
