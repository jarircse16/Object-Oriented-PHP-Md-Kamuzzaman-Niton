<?php

class Store {
    private $customers;
    private $products;

    public function __construct() {
        $this->customers = [];
        $this->products = [];
    }

    public function __destruct() {
        // Perform any necessary cleanup or actions before the object is destroyed
    }

    public function addCustomer($name, $email, $address) {
        $customer = new Customer($name, $email, $address);
        $this->customers[] = $customer;
    }

    public function addProduct($name, $price) {
        $product = new Product($name, $price);
        $this->products[] = $product;
    }

    public function printCustomers() {
        echo "Customer Information:<br>";
        foreach ($this->customers as $customer) {
            echo "Name: {$customer->getName()}<br>";
            echo "Email: {$customer->getEmail()}<br>";
            echo "Address: {$customer->getAddress()}<br><br>";
        }
    }

    public function printProducts() {
        echo "Product Information:<br>";
        foreach ($this->products as $product) {
            echo "Name: {$product->getName()}<br>";
            echo "Price: {$product->getPrice()}<br><br>";
        }
    }
}

class Customer {
    private $name;
    private $email;
    private $address;

    public function __construct($name, $email, $address) {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }

    public function __destruct() {
        // Perform any necessary cleanup or actions before the object is destroyed
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAddress() {
        return $this->address;
    }
}

class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function __destruct() {
        // Perform any necessary cleanup or actions before the object is destroyed
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

// Usage
$store = new Store();

// Add customers
$store->addCustomer("John Doe", "johndoe@example.com", "123 Main St");
$store->addCustomer("Jane Smith", "janesmith@example.com", "456 Elm St");

// Add products
$store->addProduct("Widget", 9.99);
$store->addProduct("Gadget", 19.99);

// Print customer information
$store->printCustomers();

// Print product information
$store->printProducts();
?>
