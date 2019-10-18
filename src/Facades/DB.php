<?php
/**
 * Created by PhpStorm.
 * User: arun
 * Date: 2019/10/18
 * Time: 8:23 PM
 */

namespace ArunFung\TinyLaravel\Facades;


class DB extends Facade
{
    public static function getFacadeClass(){
         return 'db';
//        return new \ArunFung\TinyLaravel\Databases\MySql();
//        return \ArunFung\TinyLaravel\Contracts\Databases\DB::class;
    }
}