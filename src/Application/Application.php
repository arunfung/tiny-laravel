<?php
/**
 * Created by PhpStorm.
 * User: arun
 * Date: 2019/10/18
 * Time: 4:20 PM
 */
namespace ArunFung\TinyLaravel\Application;

use ArunFung\TinyLaravel\Container\Container;
use ArunFung\TinyLaravel\Contracts\Databases\DB;
use ArunFung\TinyLaravel\Databases\MySql;
use ArunFung\TinyLaravel\Databases\Oracle;

class Application extends Container
{
    public function __construct()
    {
        $this->registerBaseBindings();
        $this->registerBaseService();
    }
    // 注册系统运行所需要的服务
    public function registerBaseService()
    {
        $bind = [
            'db'   => MySql::class,
            DB::class   => Oracle::class,
            // KernelContracts::class => Kernel::class,
        ];
        foreach ($bind as $key => $value) {
            $this->bind($key, $value);
        }
    }
    // 将自身绑定为共享实例
    public function registerBaseBindings()
    {
        $this->instance('app', $this);
        $this->instance(Container::class, $this);
    }
    // 从容器中解析实例
    public function make($abstract, $parameters = [])
    {
        if (!$this->has($abstract)) {
            return $abstract;
        }
        return parent::make($abstract, $parameters);
    }
}