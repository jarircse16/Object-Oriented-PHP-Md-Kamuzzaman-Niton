<?php

class Product{
	
	private $item_name = " ";
	private $item_price = " ";
	
	public function __construct(){
		$args = func_get_args();
		$num = func_num_args();
		$func = "__construct_" . $num;
		if(method_exists($this, $func)) {
			call_user_func_array(array($this, $func), $args);
		}
	} 
	
	public function __construct_1($name){
		$this->item_name = $name;
	}
	
	public function __construct_2($name, $price){
		$this->item_name = $name;
		$this->item_price = $price;
	}
	
	public function __destruct(){
		print "<br>Destroying " . $this->item_name . "<br>";
	}
	
	public function setName($name){
		$this->item_name = $name;
	}	
	
	public function setPrice($price){
		$this->item_price = $price;
	}
	
	public function showInfo(){
		print "Item Name: " . $this->item_name . "<br>";
		print "Item Price: " . $this->item_price . "<br>";
	}
}

$ram = new Product("ADATA 32GB" , 12500.00);
$ram->showInfo();

$hdd = new Product("WD 2TB" , 6500.00);
$hdd->showInfo();
?>
