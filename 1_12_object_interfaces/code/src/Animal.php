<?php

class Animal 
{
    public function chase(Prey $target)
    {
        var_dump("I am chasing a " . get_class($target));
    }

    public function kill(Prey $target)
    {
        var_dump("I have just killed a " . get_class($target));
    }
}
?>