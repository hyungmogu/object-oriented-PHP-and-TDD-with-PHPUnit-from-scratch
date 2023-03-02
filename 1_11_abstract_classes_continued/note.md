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
2. `interface` can be used in this case, but all methods needs to be defined in each subclasses

## MySQL

1. `MySQL` doesn't support return query as objects feature
2. `MySQL` requires workaround if it wants to return as objects

**/code/src/MySQLiClient.php**
```
<?php

class MySQLiCLient extends Database
{
    ...

    public function get() 
    {
        return json_decode(json_encode($this->statement->fetch_all(MYSQLI_ASSOC)));
    }
}
?>
```

<img src="https://user-images.githubusercontent.com/6856382/222318588-f4be8d72-61d1-48b6-a1b9-19bfcc9179e2.png">
