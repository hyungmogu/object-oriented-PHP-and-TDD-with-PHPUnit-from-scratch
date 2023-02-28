<?php
   
   class Database {
        private static $pdo;
        public static $operators = ["=", "<>", "and", "or", "like"];
        private $table;

        public static function connect(string $method) {
            static::$pdo = $method;

            return new static;
        }
        
        public static function create(array $data) {
            var_dump("creating new data base with " . self::$pdo);
        }
    }

    header("Content-Type:text/plain", true);
    var_dump(Database::$operators);
    Database::connect("pdo");
    Database::create([]);
?>