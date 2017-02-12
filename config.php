<?php

header('Content-Type: application/json; charset=utf-8;text/plain');

//Set connection time limit/memory limit to infinity/unlimited
set_time_limit(0);
ini_set('default_charset', 'UTF-8');
ini_set('memory_limit', '-1');

//set debug setting
define("DEBUG_REQUEST",0);
define("DEBUG_QUERY",0);

//GenSuite
define ("HOST_NAME", "gensuite.genusis.com");
define ("HOST_PATH", "/api/gateway.php");
//set database host, username & password
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

//db
$db["dimchoi"] = 'dimchoi';

//cashout table
$table["ac_config"] = 'ac_config';
$table["ac_meters"] = 'ac_meters';
$table["ac_meters_current"] = 'ac_meters_current';
$table["ac_metersdef"] = 'ac_metersdef';

$dbhandler0 = new database($dbhost, $dbuser, $dbpass, $db["dimchoi"]);

date_default_timezone_set('Asia/Kuala_Lumpur');

$mustwritelevel = 0;

//ProPTT2
$serverurl="http://192.168.2.32:8088";
$ptthost="192.168.2.32";
$pttport="8088";
$ownerid="jonathan@3lc.systems";
$hid=1;
$proptt2_prefix='i_';
$proptt2_extension='@3lc.systems';
$pttDefaultPwd='8888';

//System
$serverIP="192.168.3.31";
$port="8443";
$ssl="on";

//snapshot setting
$username='root';
$password='root';
?>