<?php
use Illuminate\Routing\Router;

Route::group([
'prefix'        => config('rbac.route.prefix'),
'namespace'     => config('rbac.route.namespace'),
], function (Router $router) {

$router->get('/role', 'RoleController@index');


});
?>