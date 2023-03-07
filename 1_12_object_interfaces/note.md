# Object Interfaces

1. `interface` is a contract that specifies which methods a class must implement
2. `interface` doesn't care about how the methods are implemented
3. `interface` can only have public methods * (for php)

**Example (code/src/prey.php)**
```
<?php

interface Prey
{
    public function chasedBy(Predator $predator);
    public function killedBy(Predator $predator);
}

?>
```

**Example (code/src/rabbit.php)**
```
<?php

class Rabbit extends Animal implements Prey
{
    public function chasedBy(Predator $predator)
    {
        var_dump('I am being chased by a '. get_class($predator));
    }

    public function killedBy(Predator $predator)
    {
        var_dump('I am killed by a '. get_class($predator));
    }
}
?>
```

