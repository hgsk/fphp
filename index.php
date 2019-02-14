<?php
require __DIR__ . '/vendor/autoload.php';

command('hi');
header("Access-Control-Allow-Origin: *");

$a = new Controller\Test();
echo Controller\User::index();
