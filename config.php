<?php

header('Content-Type: application/json; charset=utf-8;text/plain');

//Set connection time limit/memory limit to infinity/unlimited
set_time_limit(0);
ini_set('default_charset', 'UTF-8');
ini_set('memory_limit', '-1');

//set debug setting
define("DEBUG_REQUEST",0);
define("DEBUG_QUERY",0);

//set database host, username & password
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

//db
$db["mysql"] = 'mysql';

//talbe
$table["columns_priv"] = 'columns_priv';

$dbhandler0 = new database($dbhost, $dbuser, $dbpass, $db["mysql"]);

date_default_timezone_set('Asia/Kuala_Lumpur');

$mustwritelevel = 0;

?>