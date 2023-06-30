<?php

class Product {
    protected $id;
    protected $title;
    protected $price;

    function __construct($id = null, $title = null, $price = null) {
        echo "<br>Product constructor..<br>";
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }

    public function setProduct($id, $title, $price) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }

    public function showInfo() {
        echo "<br>--Product Info--<br>";
        echo "Title: {$this->title}<br>";
        echo "Price: {$this->price}<br>";
    }
}

class Book extends Product {

}

class CD extends Product {

}

$book = new Book(1, "OOP PHP", 750.00);
$book->showInfo();

$cd = new CD();
$cd->setProduct(2, "Arekta Rock Gaan", 900.00);
$cd->showInfo();
?>
