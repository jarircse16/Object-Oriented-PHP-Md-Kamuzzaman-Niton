<?php 

	class Fruits {
		
		private $data = array();
		public function addFruits($data) {
			array_push($this->data , $data);
		}
		public function getFruits(){
			return $this->data;
		}
	}
	$summer = new Fruits();
	$summer->addFruits('Mango');
	$summer->addFruits('JackFruit');
	$summer->addFruits('Litchi');
	
	$all_year = clone $summer;
	$all_year->addFruits('Banana');
	$summerFruits = $summer->getFruits();
	$allYearFruits = $all_year->getFruits();

	$htmlSummerFruits = nl2br(print_r($summerFruits, true));
	$htmlAllYearFruits = nl2br(print_r($allYearFruits, true));

	echo $htmlSummerFruits;
	echo "<br>";
	echo $htmlAllYearFruits;

?>	