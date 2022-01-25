<?php

use Illuminate\Support\Facades\Lang;

return [
    'name' => 'company',
    'menus' => [
        'back_menus' => [
            'company' => [
            'title' => Lang::get('company::menu.main_title'),
            'icon' => 'fas fa-building',
            'order' => 3,
            'permissions' => ['company.actions.view'], // here you put all sub items permissions
            'sub_menu' => [
                'item_1' => [
                    'title' => Lang::get('company::menu.sub_title_1'),
                    'route' => 'company.index',
                    'permissions' => 'company.actions.view',
                ],
                
           
            ]
        ]
        
        ]
                ],


    'permissions' => [
        'resources' => [
            'company' => [ // must be same as the module and must be unique (for lang translations)
                'actions' => [
                    'view','add','edit','delete','export','view_trash','restore','hard_delete'
                ],
            ],
        ]
    ]
];
