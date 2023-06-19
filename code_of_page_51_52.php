<?php

class Product{
	private $name = " ";
	private $price = 0.0;
	
	function __construct($name,$price){
		$this->name = $name;
		$this->price = $price;
		print "<br>Constructing " . $this->name . "<br>";
		print "<br>------------<br>";
	}
	function __destruct(){
		print "<br>Destroying " . $this->name . "<br>";
	}
	public function setName($name){
		$this->name = $name;
	}
	public function setPrice($price){
		$this->price = $price;
	}
	public function showInfo(){
		print "Name: " .$this->name . "<br>";
		print "Price: " .$this->price . "<br>";
	}
}

$ram = new Product("ADATA 32GB",12500.00);
$ram->showInfo();

$hdd = new Product("WD 2TB",6500.00);
$hdd->showInfo();
?>

	
