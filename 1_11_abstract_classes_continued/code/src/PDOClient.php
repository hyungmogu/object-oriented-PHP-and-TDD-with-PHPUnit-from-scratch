<?php
    class PDOClient extends Database
    {
        protected $dsn;
        
        public function __construct($host, $db_name, $db_user, $db_password)
        {
            parent::__construct($host, $db_name, $db_user, $db_password);
        }

        public function connect()
        {

        }
        public function get() 
        {

        }
    }
?>