# Abstract Classes

## abstract class

1. `abstract class` cannot be instantiated using the new keyword
    - the subclass must create their own version
2. `abstract class` can contain properties, methods and abstract methods
3. `abstract class` only have function definition

## abstract method

1. `abstract method` cannot have a body

**Example (GOOD)**
```
abstract class Database 
{
    abstract public function connect();
}
```

**Example (BAD)**
```
abstract class Database 
{
    abstract public function connect(){
        NO. It doesn't work.
    }
}
```

## Full Example

/code/src/Database.php
```
<?php
   abstract class Database {
        protected $_handler; // API of whichever database the user is using (e.g. Mysql, postgresql, PDO)
        protected $statement;
        protected $host, $db_name, $db_user, $db_password;

        public function __construct($host, $db_name, $db_user, $db_password) {
            $this->host = $host;
            $this->db_name = $db_name;
            $this->db_user = $db_user;
            $this->db_password = $db_password;
        }

        abstract public function connect();

        public function select($sql)
        {
            $this->statement = $this->_handler->query($sql);            
            
            return $this;
        }

        public function getConnection()
        {
            return $this->_handler;
        }

        abstract public function get();
    }

    header("Content-Type:text/plain", true);
?>
```

/code/src/PDOClient.php
```
<?php
    class PDOClient extends Database
    {
        public function connect()
        {

        }
        public function get() 
        {

        }
    }
?>
```