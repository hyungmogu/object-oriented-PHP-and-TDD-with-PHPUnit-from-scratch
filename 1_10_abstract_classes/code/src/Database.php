<?php
   
   abstract class Database {
        protected $_handler;
        protected $statement;
        protected $host, $db_name, $db_user, $db_password;
    }

    header("Content-Type:text/plain", true);
?>