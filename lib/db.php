<?php

// Class database
class database {

    function database($dbhost, $dbuser, $dbpass, $db) {
        $this->connection = mysql_connect($dbhost, $dbuser, $dbpass, 1);
        if (!$this->connection || !mysql_select_db($db, $this->connection)) {
            return false;
        } else {

            return true;
        }
    }

    function query($sql) {
        $query = mysql_query($sql, $this->connection);
        if (gettype($query) == "resource") {
            while ($row = mysql_fetch_assoc($query)) {
                $return[] = $row;
            }
            if (isset($return)) {
                return $return;
            } else {
                return false;
            }
        } else {

            if ($query == false) {
                
            } elseif ($query == true) {
                return mysql_insert_id();
            }
        }
    }

    function close() {
        mysql_close($this->connection);
    }

}

?>