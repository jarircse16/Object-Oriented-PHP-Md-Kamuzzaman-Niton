<?php
	class Consultant {
		
		private $name = "";
		private $role = "";
		
		public function __construct($name , $role) {
			
			$this->name = $name;
			$this->role = $role;
		}
		public function showRoles(){
			echo "Name: " . $this->name . "\n";
			echo "Role: " . $this->role . "\n";
			
		}
	}
	
	$data = [];
	
	$r1 = new Consultant ("Jarir" ,"PHP Developer");
	$data[] = $r1;
	
	$r2 = new Consultant ("Nowshin" ,"Java Developer");
	$data[] = $r2;

	$r3 = new Consultant ("ChatGPT" ,"Everything Developer");
	$data[] = $r3;
	
	$i=1;
	
	foreach($data as $d1) {
		echo "<br>Role # " . $i . ":<br>";
		$d1->showRoles();
		$i++;
	}
	?>
	