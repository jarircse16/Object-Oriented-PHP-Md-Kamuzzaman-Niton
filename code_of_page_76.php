<?php
	
	class Consultant {
		private $name = "";
		private $role = "";
		
		public function __construct($name , $role){
			$this->name = $name;
			$this->role = $role;
		}
		public function setConsultant($name , $role)
		{
			$this->name = $name;
			$this->role = $role;
		}
		public function showConsultant (){
			echo "Consultant: " .$this->name . "<br>";
			echo "Role: " .$this->role . "<br>";
		}
	}
	
	$p1 = new Consultant ("Riasat", "Ace Pilot");
	$p2 = $p1;
	
	$p2->setConsultant("Jarir", "PHP Developer");
	$p1->showConsultant();
	$p2->showConsultant();
	?>