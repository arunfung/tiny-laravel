<?php
namespace ArunFung\TinyLaravel\Databases;

use ArunFung\TinyLaravel\Contracts\Databases\DB;

class Oracle implements DB
{
    private $type ;

    public function __construct()
    {
        $this->type = 'oracle';
    }
    public function introduce()
    {
        return 'oracle 操作的数据库 '.$this->type;
    }
}