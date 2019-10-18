<?php
require_once __DIR__ . '/vendor/autoload.php';

use ArunFung\TinyLaravel\Application\Application;

$app  = new Application();

$db = $app->make('db');

echo $db->introduce();
