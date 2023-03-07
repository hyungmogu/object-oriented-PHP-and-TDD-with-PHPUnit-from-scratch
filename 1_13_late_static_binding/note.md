# Late Static Binding #2

1. `late static binding` allows to get information about the classes that is being currently invoked (and not the parent class)
2. `late static binding` is invoked using `new static`

## Problem
- `get_class()` returns name of the parent class

```
<?php

abstract class PreyMethod
{
    public function chasedBy(Predator $predator)
    {
        var_dump("Please help! I am being chased by " . get_class());
    }

    public function killedBy(Predator $predator)
    {
        var_dump(get_class() . " has been killed by a " . get_class($predator));
    }
}


?>
```

```
class Rabbit extends PreyMethod implements Prey
{
    
}
```

**Output**
```
string(35) "PreyMethod has been killed by a dog"
```

## Solution - Late Static Binding

**Example (code/src/PreyMethod.php)**
```
<?php

abstract class PreyMethod
{
    public function chasedBy(Predator $predator)
    {
        var_dump("Please help! I am being chased by " . get_class());
    }

    public function killedBy(Predator $predator)
    {
        var_dump(get_class(new static) . " has been killed by a " . get_class($predator));
    }
}
?>
```

