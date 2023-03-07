<?php


class Dog extends Animal implements Predator, Prey
{
    public function chase(Prey $prey)
    {
        var_dump('I am chasing a '. get_class($prey));
    }
    
    public function kill(Prey $prey)
    {
        var_dump('I have just killed a '. get_class($prey));
    }

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