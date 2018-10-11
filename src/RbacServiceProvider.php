<?php
/**
 * Created by PhpStorm.
 * User: 337886915@qq.com
 * Date: 2018/10/9
 * Time: 8:57
 */
namespace w337886915\rbac;

use Illuminate\Support\ServiceProvider;
class RbacServiceProvider extends ServiceProvider
{
    public function boot(){
        //配置路由
        $this->loadRoutesFrom(__DIR__.'/routers/routes.php');
    }

    public function register(){
        $this->registerRouteMiddleware();
    }
}