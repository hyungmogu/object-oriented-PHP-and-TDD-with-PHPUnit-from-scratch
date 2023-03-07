<?php


class Dog extends PreyMethod implements Predator, Prey
{
    public function chase(Prey $prey)
    {
        var_dump('I am chasing a '. get_class($prey));
    }
    
    public function kill(Prey $prey)
    {
        var_dump('I have just killed a '. get_class($prey));
    }
}

?>