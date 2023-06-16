<?php
	class AccountHolder{
		private $holder_name;
		private $holder_dob;
		private $holder_nid;
		private $holder_gender;
		private $holder_balance;
		
		public function __construct ($name, $dob, $nid, $gender, $balance){
			$this -> holder_name = $name;
			$this -> holder_dob = $dob;
			$this -> holder_nid = $nid;
			$this -> holder_gender = $gender;
			$this -> holder_balance = $balance;
		}
		public function __destruct(){}
		public function showHolderInfo(){
				echo "----Account Holder Information ----<br>";
				echo "Name: {$this -> holder_name} <br>";
				echo "DoB: {$this -> holder_dob} <br>";
				echo "NID: {$this -> holder_nid} <br>";
				echo "Gender: {$this -> holder_gender} <br>";
				echo "Balance: {$this -> current_balance} <br>";
		}
	}
	?>