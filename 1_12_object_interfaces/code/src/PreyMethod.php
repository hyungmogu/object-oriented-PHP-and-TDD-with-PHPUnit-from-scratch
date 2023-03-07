<?php

class PreyMethod
{
    public function chaseBy(Predator $predator)
    {
        var_dump("Please help! I am being chased by a" . get_class($predator));
    }

    public function killedBy(Predator $predator)
    {
        var_dump("I have just been killed by a" . get_class($predator));
    }
}

?>