<?php
require_once __DIR__ . '/vendor/autoload.php';

use ArunFung\TinyLaravel\Application\Application;
//use ArunFung\TinyLaravel\Contracts\Databases\DB;
use ArunFung\TinyLaravel\Databases\MySql;
use ArunFung\TinyLaravel\Databases\Oracle;
use ArunFung\TinyLaravel\Facades\DB;

$app  = new Application();

//$app->bind(DB::class, MySql::class);
//
//$db = $app->make(DB::class);
//echo $db->introduce();

echo DB::introduce();