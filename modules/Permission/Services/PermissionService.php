<?php

namespace Modules\Permission\Services;


class PermissionService{
    public static function clearCache(){
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
    }
}