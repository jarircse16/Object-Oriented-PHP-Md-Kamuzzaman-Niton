<?php

class Sample{
	
	var $variable = 'Variable';
	private $private = 'Private';
	protected $protected = 'Protected';
	public $public = 'Public';
	
	function printPropertiesInfo() {
		print_r((array)$this);
		echo "<br>";
		echo $this->variable . "<br>";
		echo $this->private . "<br>";
		echo $this->protected . "<br>";
		echo $this->public . "<br>";
	}
}
$obj = new Sample();
$obj->printPropertiesInfo();
?>