<?php
require_once('book.php');
require_once('cd.php');

$product = new Product(0,"Product",100.00);
$book = new Book (1,"OOP PHP",750.00);
$cd = new CD (2,"Arekta Rock Gaan",900.00);

var_dump($product);
var_dump($book);
var_dump($cd);
?>