<?php
    spl_autoload_register(function($class) {
        include "src/$class.php";
    });

    
    header("Content-Type:text/plain", true);
    $pdo = (new PDOClient('mysql', 'localhost', 'stroe', 'stroe', 'connect'))->connect();

    $products = $pdo->select("SELECT * FROM products")->get();

    var_dump($products);
?>