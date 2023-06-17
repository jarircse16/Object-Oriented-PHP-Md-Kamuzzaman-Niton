<?php
	echo "PHP Version :" .phpversion() . "<br><br>";
	
	class Sample {
		public $public = "Public Value";
		private $private = "Private Value";
		protected $protected = "Protected Value";
	}
	$obj = new Sample;
	echo "Serialize: " . serialize($obj) . "<br><br>";
	
	echo "Print as Object: <br>";
	print_r($obj);
	echo "<br>";
	echo "Print as Array: <br>";
	print_r((array)$obj);
?>
