<?php
    spl_autoload_register(function($class) {
        include "src/$class.php";
    });

    
    header("Content-Type:text/plain", true);
    // $pdo = (new PDOClient('mysql', 'localhost', 'store', 'store', 'connect'))->connect();
    $mysqli = (new MySQLiClient('mysql', 'localhost', 'store', 'store', 'connect'))->connect();

    // $products = $pdo->select("SELECT * FROM products")->get();
    $products = $mysqli->select("SELECT * FROM products")->get();

    foreach ($product as $product)
    {
        var_dump($product->name);
    }
?>