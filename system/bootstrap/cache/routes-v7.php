<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GxtYZbXt8PhYlgmi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ji03sLTPw8cUALNn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YTNT7lOagHk8WGx5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wB2VkXJyy9ifzdOO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4zm1pqPmfQUw81lj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/insurance/companies/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U7wpXjPP8LZ1RpRm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/companies/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/companies/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/companies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/companies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/companies/trashed/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.trashed.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/companies/trashed/restore-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.trashed.restore.many',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/companies/trashed/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.trashed.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jb9xBlqMLoIwV4Nb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/core' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jnnLz67YfzOPeXxs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/core/theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PmSdZy3YK8nQJ1WJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.register.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.login.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/email/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.verify.email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee.verification.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/email/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.verification.resend',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employee/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employee/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employee/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employee/trashed/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.trashed.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employee/trashed/restore-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.trashed.restore.many',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employee/trashed/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.trashed.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IwwZjrZMOHgRg0qZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rpNL15I8RL5orRCT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/trashed/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/trashed/restore-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.restore.many',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/trashed/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/(?|c(?|lockwork/([^/]++)(*:42)|ache/([^/]++)(?:/([^/]++))?(*:76))|telescope/([^/]++)(*:102))|/password/reset/([^/]++)(*:135)|/dashboard/(?|companies/(?|([^/]++)(?|(*:181)|/edit(*:194)|(*:202))|trashed/([^/]++)(?|(*:230)))|employee/(?|([^/]++)(?|(*:263)|/edit(*:276)|(*:284))|notification/(?|create/([^/]++)(*:324)|send/([^/]++)(*:345))|all/notification/(?|create/([^/]++)(*:389)|send/([^/]++)(*:410))|trashed/([^/]++)(?|(*:438)))|roles/([^/]++)(?|(*:465)|/edit(*:478)|(*:486))|users/(?|([^/]++)(?|(*:515)|/edit(*:528)|(*:536))|trashed/([^/]++)(?|(*:564)))))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.telescope',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      181 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.update',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.edit',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.delete',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.trashed.destroy',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.trashed.restore',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.update',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.edit',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.delete',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.create_notify',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.send_notify',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.all.create_notify',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.all.send_notify',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.trashed.destroy',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee.trashed.restore',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.restore',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.telescope' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/telescope/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\TelescopeController@show',
        'as' => 'debugbar.telescope',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\TelescopeController@show',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GxtYZbXt8PhYlgmi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000005553774200000000742ad679";}";s:4:"hash";s:44:"Pu4zwCuM9gaULOEOwYg97orayK/k3fqSTU2xLizcKBk=";}}',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GxtYZbXt8PhYlgmi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ji03sLTPw8cUALNn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:260:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:42:"function () {
    return \\view(\'index\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000555378e000000000742ad679";}";s:4:"hash";s:44:"Assuv/EXmK/CSfS8nZtocRdfv+dbNNhdPT9AqI98URo=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ji03sLTPw8cUALNn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YTNT7lOagHk8WGx5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YTNT7lOagHk8WGx5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wB2VkXJyy9ifzdOO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wB2VkXJyy9ifzdOO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4zm1pqPmfQUw81lj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4zm1pqPmfQUw81lj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U7wpXjPP8LZ1RpRm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/insurance/companies/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'auth:api',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\Api\\CompanyController@index',
        'controller' => 'Modules\\Company\\Http\\Controllers\\Api\\CompanyController@index',
        'namespace' => 'Modules\\Company\\Http\\Controllers\\Api',
        'prefix' => 'api/insurance/companies',
        'where' => 
        array (
        ),
        'as' => 'generated::U7wpXjPP8LZ1RpRm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/companies/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.delete',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\CompanyController@destroyMany',
        'controller' => 'Modules\\Company\\Http\\Controllers\\CompanyController@destroyMany',
        'as' => 'company.destroy.many',
        'namespace' => 'Modules\\Company\\Http\\Controllers',
        'prefix' => 'dashboard/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/companies/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.view',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\CompanyDatatableController@__invoke',
        'controller' => 'Modules\\Company\\Http\\Controllers\\CompanyDatatableController',
        'as' => 'company.datatable',
        'namespace' => 'Modules\\Company\\Http\\Controllers',
        'prefix' => 'dashboard/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.view',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\CompanyController@index',
        'controller' => 'Modules\\Company\\Http\\Controllers\\CompanyController@index',
        'as' => 'company.index',
        'namespace' => 'Modules\\Company\\Http\\Controllers',
        'prefix' => 'dashboard/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.add',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\CompanyController@store',
        'controller' => 'Modules\\Company\\Http\\Controllers\\CompanyController@store',
        'as' => 'company.store',
        'namespace' => 'Modules\\Company\\Http\\Controllers',
        'prefix' => 'dashboard/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/companies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.add',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\CompanyController@create',
        'controller' => 'Modules\\Company\\Http\\Controllers\\CompanyController@create',
        'as' => 'company.create',
        'namespace' => 'Modules\\Company\\Http\\Controllers',
        'prefix' => 'dashboard/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/companies/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.edit',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\CompanyController@update',
        'controller' => 'Modules\\Company\\Http\\Controllers\\CompanyController@update',
        'as' => 'company.update',
        'namespace' => 'Modules\\Company\\Http\\Controllers',
        'prefix' => 'dashboard/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/companies/{company}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.edit',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\CompanyController@edit',
        'controller' => 'Modules\\Company\\Http\\Controllers\\CompanyController@edit',
        'as' => 'company.edit',
        'namespace' => 'Modules\\Company\\Http\\Controllers',
        'prefix' => 'dashboard/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/companies/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.delete',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\CompanyController@destroy',
        'controller' => 'Modules\\Company\\Http\\Controllers\\CompanyController@destroy',
        'as' => 'company.delete',
        'namespace' => 'Modules\\Company\\Http\\Controllers',
        'prefix' => 'dashboard/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.trashed.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/companies/trashed/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.hard_delete',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\Trashed\\CompanyTrashedController@destroyMany',
        'controller' => 'Modules\\Company\\Http\\Controllers\\Trashed\\CompanyTrashedController@destroyMany',
        'as' => 'company.trashed.destroy.many',
        'namespace' => 'Modules\\Company\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/companies/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.trashed.restore.many' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/companies/trashed/restore-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.restore',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\Trashed\\CompanyTrashedController@restoreMany',
        'controller' => 'Modules\\Company\\Http\\Controllers\\Trashed\\CompanyTrashedController@restoreMany',
        'as' => 'company.trashed.restore.many',
        'namespace' => 'Modules\\Company\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/companies/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.trashed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/companies/trashed/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.hard_delete',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\Trashed\\CompanyTrashedController@destroy',
        'controller' => 'Modules\\Company\\Http\\Controllers\\Trashed\\CompanyTrashedController@destroy',
        'as' => 'company.trashed.destroy',
        'namespace' => 'Modules\\Company\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/companies/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/companies/trashed/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.restore',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\Trashed\\CompanyTrashedController@restore',
        'controller' => 'Modules\\Company\\Http\\Controllers\\Trashed\\CompanyTrashedController@restore',
        'as' => 'company.trashed.restore',
        'namespace' => 'Modules\\Company\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/companies/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.trashed.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/companies/trashed/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:company.actions.view_trash',
        ),
        'uses' => 'Modules\\Company\\Http\\Controllers\\Trashed\\CompanyTrashedDataTableController@__invoke',
        'controller' => 'Modules\\Company\\Http\\Controllers\\Trashed\\CompanyTrashedDataTableController',
        'as' => 'company.trashed.datatable',
        'namespace' => 'Modules\\Company\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/companies/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jb9xBlqMLoIwV4Nb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'auth:api',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\Api\\SettingOptionController@index',
        'controller' => 'Modules\\Core\\Http\\Controllers\\Api\\SettingOptionController@index',
        'namespace' => 'Modules\\Core\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Jb9xBlqMLoIwV4Nb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jnnLz67YfzOPeXxs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'core',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\CoreController@index',
        'controller' => 'Modules\\Core\\Http\\Controllers\\CoreController@index',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => '/core',
        'where' => 
        array (
        ),
        'as' => 'generated::jnnLz67YfzOPeXxs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PmSdZy3YK8nQJ1WJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'core/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:287:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:69:"function () {
        return \\view(\'dashboard::pages.index\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000555378fd00000000742ad679";}";s:4:"hash";s:44:"K6Gpa9gi32EA77DQlt4C11Nv3m3YJBPOU8RSbeF0ZYA=";}}',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => '/core',
        'where' => 
        array (
        ),
        'as' => 'generated::PmSdZy3YK8nQJ1WJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.register.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Auth\\RegisterController@show',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Auth\\RegisterController@show',
        'as' => 'employee.register.show',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => '/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employee/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Auth\\RegisterController@register',
        'as' => 'employee.register',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => '/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.login.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Auth\\LoginController@show',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Auth\\LoginController@show',
        'as' => 'employee.login.show',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => '/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employee/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Auth\\LoginController@login',
        'as' => 'employee.login',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => '/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Auth\\LoginController@logout',
        'as' => 'employee.logout',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => '/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.verify.email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/email/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Auth\\VerificationController@show',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Auth\\VerificationController@show',
        'as' => 'employee.verify.email',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => '/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employee/email/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Auth\\VerificationController@verify',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Auth\\VerificationController@verify',
        'as' => 'employee.verification.verify',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => '/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.verification.resend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employee/email/resend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Auth\\VerificationController@resend',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Auth\\VerificationController@resend',
        'as' => 'employee.verification.resend',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => '/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/employee/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.delete',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@destroyMany',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@destroyMany',
        'as' => 'employee.destroy.many',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employee/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.view',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\EmployeeDatatableController@__invoke',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\EmployeeDatatableController',
        'as' => 'employee.datatable',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.view',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@index',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@index',
        'as' => 'employee.index',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.add',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@store',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@store',
        'as' => 'employee.store',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employee/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.add',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@create',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@create',
        'as' => 'employee.create',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/employee/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.edit',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@update',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@update',
        'as' => 'employee.update',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employee/{employee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.edit',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@edit',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@edit',
        'as' => 'employee.edit',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/employee/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.delete',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@destroy',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\EmployeeController@destroy',
        'as' => 'employee.delete',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.create_notify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employee/notification/create/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\NotificationController@create_user_notify',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\NotificationController@create_user_notify',
        'as' => 'employee.create_notify',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.send_notify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employee/notification/send/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\NotificationController@send_user_notify',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\NotificationController@send_user_notify',
        'as' => 'employee.send_notify',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.all.create_notify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employee/all/notification/create/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\NotificationController@create_user_all_notify',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\NotificationController@create_user_all_notify',
        'as' => 'employee.all.create_notify',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.all.send_notify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employee/all/notification/send/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\NotificationController@send_user_all_notify',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\NotificationController@send_user_all_notify',
        'as' => 'employee.all.send_notify',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => 'dashboard/employee',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.trashed.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/employee/trashed/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.hard_delete',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Trashed\\EmployeeTrashedController@destroyMany',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Trashed\\EmployeeTrashedController@destroyMany',
        'as' => 'employee.trashed.destroy.many',
        'namespace' => 'Modules\\Employee\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/employee/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.trashed.restore.many' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employee/trashed/restore-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.restore',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Trashed\\EmployeeTrashedController@restoreMany',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Trashed\\EmployeeTrashedController@restoreMany',
        'as' => 'employee.trashed.restore.many',
        'namespace' => 'Modules\\Employee\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/employee/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.trashed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/employee/trashed/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.hard_delete',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Trashed\\EmployeeTrashedController@destroy',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Trashed\\EmployeeTrashedController@destroy',
        'as' => 'employee.trashed.destroy',
        'namespace' => 'Modules\\Employee\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/employee/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employee/trashed/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.restore',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Trashed\\EmployeeTrashedController@restore',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Trashed\\EmployeeTrashedController@restore',
        'as' => 'employee.trashed.restore',
        'namespace' => 'Modules\\Employee\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/employee/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.trashed.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employee/trashed/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:employee.actions.view_trash',
        ),
        'uses' => 'Modules\\Employee\\Http\\Controllers\\Trashed\\EmployeeTrashedDataTableController@__invoke',
        'controller' => 'Modules\\Employee\\Http\\Controllers\\Trashed\\EmployeeTrashedDataTableController',
        'as' => 'employee.trashed.datatable',
        'namespace' => 'Modules\\Employee\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/employee/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IwwZjrZMOHgRg0qZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'verifiedEmail',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:272:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:54:"function(){
    return \\view(\'employee::profile\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000005553789b00000000742ad679";}";s:4:"hash";s:44:"zOFlLIkp/Nlw32Y2BbhtqkgEa/qHFwhK8QwZgcuwm3I=";}}',
        'namespace' => 'Modules\\Employee\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IwwZjrZMOHgRg0qZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rpNL15I8RL5orRCT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000005553774d00000000742ad679";}";s:4:"hash";s:44:"hLSdP88HVpSEotGdrWldItI3uiQlHQfYjaQslkE0+0Q=";}}',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rpNL15I8RL5orRCT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/roles/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.delete',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@destroyMany',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@destroyMany',
        'as' => 'roles.destroy.many',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.view',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleDataTableController@__invoke',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleDataTableController',
        'as' => 'roles.datatable',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.view',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@index',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@index',
        'as' => 'roles.index',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.add',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@store',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@store',
        'as' => 'roles.store',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.add',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@create',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@create',
        'as' => 'roles.create',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.edit',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@update',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@update',
        'as' => 'roles.update',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.edit',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@edit',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@edit',
        'as' => 'roles.edit',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.delete',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@destroy',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@destroy',
        'as' => 'roles.destroy',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.login.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@show',
        'controller' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@show',
        'as' => 'user.login.show',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@login',
        'as' => 'user.login',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@logout',
        'as' => 'user.logout',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'user::dashboard.dashboard',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.delete',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@destroyMany',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@destroyMany',
        'as' => 'users.destroy.many',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.view',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserDatatableController@__invoke',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserDatatableController',
        'as' => 'users.datatable',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.view',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@index',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@index',
        'as' => 'users.index',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.add',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@store',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@store',
        'as' => 'users.store',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.add',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@create',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@create',
        'as' => 'users.create',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.edit',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@update',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@update',
        'as' => 'users.update',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.edit',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@edit',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@edit',
        'as' => 'users.edit',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.delete',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@destroy',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@destroy',
        'as' => 'users.destroy',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.trashed.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/trashed/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.hard_delete',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroyMany',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroyMany',
        'as' => 'users.trashed.destroy.many',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.trashed.restore.many' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/users/trashed/restore-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.restore',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restoreMany',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restoreMany',
        'as' => 'users.trashed.restore.many',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.trashed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/trashed/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.hard_delete',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroy',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroy',
        'as' => 'users.trashed.destroy',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/users/trashed/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.restore',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restore',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restore',
        'as' => 'users.trashed.restore',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.trashed.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/trashed/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:user.actions.view_trash',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedDataTableController@__invoke',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedDataTableController',
        'as' => 'users.trashed.datatable',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
