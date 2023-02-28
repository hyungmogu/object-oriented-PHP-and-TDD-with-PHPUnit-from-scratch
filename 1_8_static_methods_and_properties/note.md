# Static Method and Properties

## static keyword

1. `static` keyword beside methods / properties allows its access without instantiation

```
<?php
   
   class Database {
    static private $pdo;
    static public $operators = ["=", "<>", "and", "or", "like"];
   }
?>
```

2. `static` keyword order doesn't matter
    - The following is also valid

```
<?php
   
   class Database {
    private static $pdo;
    public static $operators = ["=", "<>", "and", "or", "like"];
   }
?>
```

## Accessing static variable

1. `self::` is used access static method / attributes from within

```
<?php
   class Database {
        private static $pdo;
        public static $operators = ["=", "<>", "and", "or", "like"];

        public static function connect(string $method) {
            self::$pdo = $method;
        }
        
        public static function create(array $data) {
            var_dump("creating new data base with " . self::$pdo);
        }

        public function insert(array $data) {
            var_dump("inserting new data base with " . self::$pdo);
        }
    }
?>
```

2. `CLASS_NAME::` is used to access non-instantiated class from outside

```
<?php
   
   class Database {
        private static $pdo;
        public static $operators = ["=", "<>", "and", "or", "like"];

        public static function connect(string $method) {
            self::$pdo = $method;
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
```

## Late static binding

1. Allows to bind values to non-static variable

```
<?php
   
   class Database {
        private static $pdo;
        public static $operators = ["=", "<>", "and", "or", "like"];
        private $table;

        public static function connect(string $method) {
            $obj = new static;
            $obj->table;
            ...
        }
        
        ...
    }
?>
```