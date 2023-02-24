# Bootstraping an Object

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