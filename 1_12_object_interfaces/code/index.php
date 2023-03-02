<?php
    spl_autoload_register(function($class) {
        include "src/$class.php";
    });

    
    header("Content-Type:text/plain", true);
    
?>