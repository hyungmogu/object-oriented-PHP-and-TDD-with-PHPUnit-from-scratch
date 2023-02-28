# Object Inheritance

1. inheritance is declared by writing `extends` keyword besire class
    - `protected` keywords-contained methods and attributes pass down the inheritance
    - `public` keywords-contained methods and attributes pass down the inheritance

```
<?php
    class Animal {
        ...
    }

    class Mammal extends Animal {
        public $heartRate;

        public function breathe()
        {
            var_dump("I can breathe because I am a mammal");
        }
    }
?>
```

