<?php
namespace ArunFung\TinyLaravel\Databases;

class MySql
{
    private $type ;

    public function __construct()
    {
        $this->type = 'mysql';
    }
    public function introduce()
    {
        return 'mysql 操作的数据库 '.$this->type;
    }
}