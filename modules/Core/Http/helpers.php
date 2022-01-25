<?php

use Modules\Permission\Services\PermissionService;
use Nwidart\Modules\Facades\Module;
use Spatie\Permission\Models\Permission;

if(!function_exists('_dt_btn_factory')){
    function _dt_btn_factory($options){
        $defaultKeys = [
            'action'      => '',
            'actionType'  => '',
            'actionMethod'  => '',
            'url'         => '',
            'groupAction' => 'false',
            'title'       => '',
            'icon'        => '',
            'classes'     => '',
            'permissions' => '',
            'conditions'    => '',
            'tooltip' => [
                'disabled' => false,
                'placement' => '',
                'color' => ''
            ],
            'alertOptions' => [
                'title' => '',
                'icon' => '',
                'showCancelButton' => '',
                'buttonsStyling' => '',
                'confirmButtonText' => '',
                'confirmButtonClasses' => '',
                'cancelButtonText' => '',
                'confirmButtonClasses' => '',
            ]
        ];
        return array_merge($defaultKeys, $options);
    }
}

if(!function_exists('_generate_theme_menu')){
    function _generate_theme_menu($theme, $menuModel){
        $menu_key = 'back_menus';
        if($theme == 'back'){
            $menuModel::destroy($menuModel::backThemeItems()->get());
            $menuModel::create([
                'type' => 'back',
                'title' => 'Dashboard',
                'route' => 'dashboard',
                'order' => 0,
                'icon' => 'fas fa-tachometer-fast'
            ]);
        }elseif($theme == 'front'){
            $menu_key = 'front_menus';
            $menuModel::destroy($menuModel::frontThemeItems()->get());
        }else {
            throw new Exception('theme specified does not exist');
        }
        foreach (Module::all() as $module) {
            if(config()->has($module->getLowerName(). '.menus.' . $menu_key)){
                foreach (config($module->getLowerName(). '.menus.'. $menu_key) as $resourceKey => $value) {
                    try {
                        $menu = new $menuModel;
                        $menu->type = $theme == 'back' ? 'back' : 'front';
                        $menu->title = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.title');
                        $menu->icon = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.icon');
                        $menu->order = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.order');
                        $menu->permissions = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.permissions');
                        if(config()->has($module->getLowerName(). '.menus.'. $menu_key. '.' . $resourceKey . '.sub_menu')){
                            $sub_menu = [];
                            $active_routes = [];
                            foreach (config($module->getLowerName(). '.menus.' .$menu_key. '.' . $resourceKey . '.sub_menu') as $key => $value) {
                                $item = [];
                                $item['title'] = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.sub_menu.' . $key . '.title');
                                $item['route'] = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.sub_menu.' . $key . '.route');
                                $item['permissions'] = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.sub_menu.' . $key . '.permissions');
                                array_push($sub_menu, $item);
                                array_push($active_routes, config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.sub_menu.' . $key . '.route'));
                            }
                        }
                        if(isset($sub_menu)){
                            $menu->sub_menu = $sub_menu;
                            
                            if(isset($active_routes)){
                            $menu->active_routes = $active_routes;
                            }
                        }
                        $menu->save();
                    } catch (\Throwable $th) {
                        throw $th;
                    }
                }
            }
        
        }
    }
}

if(!function_exists('_sync_permissions')){
    function _sync_permissions(){
        $permissions_to_guard = [];
        foreach (Module::all() as $module) {
            if(config()->has($module->getLowerName(). '.permissions.resources')){
                foreach (config($module->getLowerName(). '.permissions.resources') as $resource => $value) {
                    //inside resource
                    foreach ( config($module->getLowerName(). '.permissions.resources.'.$resource) as $resource_group => $permission_names) {
                        //inside resource group
                        foreach ($permission_names as $permission_name) {
                            $permission = Permission::where("name","{$resource}.{$resource_group}.{$permission_name}")->where('guard_name','dashboard')->first();
                            if(is_null($permission)){
                                $permission = Permission::create([
                                    'guard_name' => 'dashboard',
                                    'name' => "{$resource}.{$resource_group}.{$permission_name}",
                                    'asset' => $resource,
                                    'module' => $module->getLowerName(),
                                    'action_group' => $resource_group,
                                    'action' => $permission_name,
                                ]);
                            }
                            // we add the permission to the list we should guard
                            array_push($permissions_to_guard,$permission->id);
                        }
                    }
                }
            }
        }
        if(!empty($permissions_to_guard)){
            Permission::whereNotIn('id', $permissions_to_guard)->delete();
            PermissionService::clearCache();
        }
    }
    
}