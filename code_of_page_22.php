<?php
 
 class currency{
	 const BDT_USD = 83.00;
	 const BDT_JPY = 0.80;
	 
	 public function convertBDT_to_USD($amount_bdt)
	 {
			 return $amount_bdt / self ::BDT_USD;
	 }
	 public function convertBDT_to_JPY($amount_bdt)
	 {
			 return $amount_bdt / self ::BDT_JPY;
	 }
 } 
	 $cur = new Currency();
	 echo 'BDT 8000 = USD ' . $cur->convertBDT_to_USD(8000);
	 echo "<br>";
	 echo 'BDT 8000 = JPY ' . $cur->convertBDT_to_JPY(8000);
	 
?>