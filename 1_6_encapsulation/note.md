# Encapsulation

## public

1. means it can be called from outside of the class

2. also means child class inherits the property / method

## private

1. means it cannot be called outside of the class

2. also means child class doesn't inherit the property / method


```
<?php
    class Video {
        private $type;
        private $duration;
        private $published = false;
        private $title;

        ...
    }

    $video = new Video(...);
    $video->type // No. Can't do that.

?>

```

## protected

1. means cannot call method / property outside of an instance of the class

2. means the method / property is inherited in child class

**Example** 

```
<?php
    class Video {
        private $type;
        private $duration;
        protected $published = false;
        private $title;

        ...
    }
?>
```

## Setter and Getter

1. allows clients to interact with private / protected property

**Example**

```
<?php

    class Video {
        private $type;
        private $duration;
        protected $published = false;
        private $title;

        public function setTitle(string $title) {
            $this->title = $title;
        }

        public function getTitle(string $title) {
            return $this->title;
        }
    }
?>
```

