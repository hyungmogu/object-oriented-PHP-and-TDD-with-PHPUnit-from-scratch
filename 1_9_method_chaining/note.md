# Method Chaining

## Late Static binding (continued)

1. `static::` is a short hand form of late static binding

```
<?php
   class Database {
        private static $pdo;
        public static $operators = ["=", "<>", "and", "or", "like"];
        private $table;

        public static function connect(string $method) {
            static::$pdo = $method;
        }
    }
?>
```

## Method Chaining
- Is done by returning entire class
- `return new static` returns the entire class object
- `return new static` is used instide a static method

```
<?php
    class Database {
        private static $pdo;
        public static $operators = ["=", "<>", "and", "or", "like"];
        private $table;

        public static function connect(string $method) {
            static::$pdo = $method;

            return new static; // <-- here
        }
    }
?>
```

- `return $this` returns the instantiated class object
- `return $this` is used when NOT inside a static method

```
<?php
   
   class Database {
        private static $pdo;
        public static $operators = ["=", "<>", "and", "or", "like"];
        private $table;

        ...

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
?>
```

- `->` is used to do method chaining

```
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
```