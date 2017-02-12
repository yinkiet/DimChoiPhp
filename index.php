<?php

include "lib/db.php";
include "config.php";
include "function/query.php";

header('Access-Control-Allow-Origin: *');

var_dump(testQuery());
?>