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