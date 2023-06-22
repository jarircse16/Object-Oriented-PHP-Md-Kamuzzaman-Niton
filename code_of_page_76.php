<?php
	
	class Consultant {
		private $name = " ";
		private $role = " ";
		
		public function __construct($name , $role){
			$this->name = $name;
			$this->role = $role;
		}
		public function setConsultant()
		{
			$this->name = $name;
			$this->role = $role;
		}
		public function showConsultant (){
			echo "Consultant: " .$this->name . "\n";
			echo "Role: " .$this->role . "\n";
		}
	}
	
	$p1 = new Consultant ("Jarir", "PHP Developer");
	$p2 = $p1;
	
	$p2 = new Consultant ("Riasat", "Ace Pilot");
	$p1->showConsultant();
	$p2->showConsultant();
	?>