<?php
   
   class Database {
        private static $pdo;
        public static $operators = ["=", "<>", "and", "or", "like"];
        private $table;

        public static function connect(string $method) {
            self::$pdo = $method;

            return new static;
        }

        public function table(string $name)
        {
            $this->table = $name;

            return $this;
        }
        
        public function insert(array $data) {
            var_dump("connected to database using " . self::$pdo);
            var_dump("INSERTING INTO {$this->table} values(" . json_encode($data) .")");
        }
        
    }

    header("Content-Type:text/plain", true);
    var_dump(Database::$operators);
    Database::connect("pdo")->table("users")->insert(['username' => 'Terry', 'password' => '123']);
?>