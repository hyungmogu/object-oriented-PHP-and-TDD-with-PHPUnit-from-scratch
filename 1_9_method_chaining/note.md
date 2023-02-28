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

