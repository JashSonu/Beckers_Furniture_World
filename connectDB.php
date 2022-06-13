<?php 

// This line is for connecting with the locahost XAMPP in my machine
$pdo = new PDO('mysql:host=localhost; port=3306; dbname=furniture', 'root', 'jashpatel1');

// This line is to set connection with hostinger
// $pdo = new PDO('mysql:host=localhost; dbname=u487107656_meubilar', 'u487107656_root', '#Meubilar01');

// See the "errors" folder for details
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?> 