# Bootstraping an Object

## Constructor

1. constructor for php is `__construct()`

2. default parameter value can be done by adding `= <VALUE>` beside a parameter

**Example**

```
Class Video {
    ...

    public function __constructor($type = "mp4", $duration = "08:90" , $title = "default")
    {
        ...
    }
}
```

3. parameter can become strongly typed by adding type beside its parameter

**Example**

```
Class Video {
    ...

    public function __constructor(string $type = "mp4", float $duration, string $title)
    {
        ...
    }
}
```

## Descructor

1. Destroys an object to free up memory

2. Destructor syntax is `__destruct()` 

**Example**

```
class Video {
    ...

    public function __destruct() 
    {
        echo "Destroying Instance of " . get_class();
    }
}
```

## Aside

1. `get_class()` function returns the name of class