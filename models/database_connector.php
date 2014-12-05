<?php

include_once("modules/database.php");

class DatabaseConnector {
    public $db;

    function __construct($db) {
        $this->db = getDatabase();
    }
}

?>
