<?php
require_once __DIR__ . '/vendor/autoload.php';
use ArunFung\TinyLaravel\Databases\MySql;
use ArunFung\TinyLaravel\Databases\Oracle;

$mysql = new MySql();
echo $mysql->introduce();
$Oracle = new Oracle();