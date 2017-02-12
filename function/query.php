<?php

function testQuery() {
    global $dbhandler0, $db, $table;
    mysql_query("SET NAMES 'utf8'");
    $sqlcheck = "SELECT * FROM " . $db["mysql"] . "." . $table["columns_priv"];
    $res = $dbhandler0->query($sqlcheck);
    //WriteDebugLog($sqlcheck, DEBUG_QUERY);
    return $res;
}

?>