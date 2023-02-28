<?php
    class Animal {
        public $weight;
        
        public function eat() 
        {
            var_dump("All animals can eat");
        }

        public function reproduce()
        {
            var_dump("All animals can reproduce");
        }
    }

    class Mammal extends Animal {
        public $heartRate;

        public function breathe()
        {
            var_dump("I can breathe because I am a mammal");
        }
    }

    class Dog extends Mammal {
        public $color;
        
        public function bark() 
        {
            var_dump("I can bark because I am a " . strtolower(get_class()));
        }

        public function chase()
        {
            var_dump("I am chasing a rabbit");
        }
    }

    header("Content-Type:text/plain", true);
    $brown = new Dog();
    $brown->weight = 20;
    $brown->heartRate = "okay";
    $brown->color = "brown";
    var_dump($brown);
    $brown->bark();
    $brown->eat();
    $brown->reproduce();
    $brown->breathe();
    $brown->chase();
?>