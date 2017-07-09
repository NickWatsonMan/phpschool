<?php

// DB connection
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PWD", "");
define("DB_NAME", "test");


define("_EXECUTED",1);
session_start();
$f3 = require('lib/base.php');

$db = new DB\SQL(
    'mysql:host='.DB_HOST.';port=3306;dbname='.DB_NAME, DB_USER, DB_PWD
);

$f3->set("DB",$db);
$f3->set('DEBUG', 0);
//$f3->set('CACHE',FALSE);
//$f3->set('UI','ui/views/');
$f3->set('AUTOLOAD','autoload/');


if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

//profile

$f3->route('GET /',"controllers\home->main");

$f3->run();