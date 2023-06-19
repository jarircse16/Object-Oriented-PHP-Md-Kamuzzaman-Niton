<?php

class Product{
	private $name = " ";
	private $price = 0.0;
	
	function __construct(){
		print "\nConstructor\n";
		print "\n------------\n";
	}
	function __destruct(){
		print "\nDestroying " . $this->name . "\n";
	}
	public function setName($name){
		$this->name = $name;
	}
	public function setPrice($price){
		$this->price = $price;
	}
	public function showInfo(){
		print "Name: " .$this->name . "\n";
		print "Price: " .$this->price . "\n";
	}
}

$ram = new Product();
$ram->setName("ADATA 32GB");
$ram->setPrice(12500.00);
$ram->showInfo();

$hdd = new Product();
$hdd->setName("WD 2TB");
$hdd->setPrice(6500.00);
$hdd->showInfo();
?>

	
