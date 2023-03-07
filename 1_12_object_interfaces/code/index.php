<?php
    spl_autoload_register(function($class) {
        include "src/$class.php";
    });

    header("Content-Type:text/plain", true);

    $rabbit = new Rabbit();
    $dog = new Dog();
    $dog->chase($rabbit);
    $dog->kill($rabbit);

    $cat = new Lion();
    $cat->chase($rabbit);
    $cat->kill($rabbit);
?>