<?php

class Product {
    protected $name = "Product Name";
    protected $size = "Product Size";
    protected $price = 0.0;

    public function getName(): string {
        return $this->name;
    }

    public function getSize(): string {
        return $this->size;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setName($name) {
        if (is_string($name) && strlen($name) < 64) {
            $this->name = (string)$name;
        } else {
            $this->name = substr((string)$name, 0, 64);
        }
    }

    public function setSize($size) {
        if (is_string($size) && strlen($size) < 16) { // Fixed variable name from $name to $size
            $this->size = (string)$size;
        } else {
            $this->size = substr((string)$size, 0, 16); // Fixed variable name from $name to $size
        }
    }

    public function setPrice($price) {
        if (is_numeric($price)) {
            $this->price = (float)$price;
        } else {
            $this->price = 0.0;
        }
    }

    public function showInfo() {
        echo "Product: " . $this->name . "\n"; // Removed extra $ symbol before name, size, and price
        echo "Size: " . $this->size . "\n"; // Removed extra $ symbol before name, size, and price
        echo "Price: " . $this->price . "\n"; // Removed extra $ symbol before name, size, and price
    }
}

$shirt = new Product();
$shirt->setName("POLO");
$shirt->setSize("M");
$shirt->setPrice(2600.00); // Fixed arrow operator from "-" to "->" before setPrice
$shirt->showInfo(); 
?>
