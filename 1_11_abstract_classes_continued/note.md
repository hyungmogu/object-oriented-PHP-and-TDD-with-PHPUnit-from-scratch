# Abstract Classes 2

1. in file `/code/src/PDOClient.php`, `$dsn` means datasource name
    - it contains the driver and the name of the database which we are attempting to connect using PDO

## spl_autoload_register

1. `spl_autoload_register` loads whatever files it lists
    - it's like `require` on steroid

**/code/index.php**
```
<?php
    spl_autoload_register(function($class) {
        include "src/$class.php";
    });

    
    header("Content-Type:text/plain", true);
?>
```

## parent::

1. `parent::` is php equivalent of python's `super`

**/code/src/PDOClient.php**
```
<?php
    class PDOClient extends Database
    {
        protected $dsn;

        public function __construct($host, $db_name, $db_user, $db_password)
        {
            parent::__construct($host, $db_name, $db_user, $db_password);
        }
    }
?>
```

## interface

1. `interface` keyword beside class allows only definition