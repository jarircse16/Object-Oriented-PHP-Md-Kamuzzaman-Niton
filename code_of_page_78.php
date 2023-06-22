<?php
	
	class User {
		
		private $name = "";
		
		public function __construct($name) {
			
			$this->name = $name;
		}
		public function setName($name){
			
			$this->name = $name;
		}
		
		public function showName(){
			
			echo "Name: " . $this->name . "<br>";
		}
	}
	
	$u1 = new User("Jarir");
	$u2 = $u1;
	$u1->setName("Ahmed");
	$u1 = NULL;
	$u2->showName();
	
	$u3 = new User("Goru");
	$u4 = &$u3;
	$u4->showName(); // This will  show Goru because initially $u3 was set to Goru.
	$u3->setName("Chagol");
	$u4->showName(); //This will show Chagol because now we set $u3 Chagol again.
//	$u3 = NULL;
//	$u4->showName(); // will cause fatal error because in $u4 we set the reference of $u3 , so $u4 is an alias of $u3 

?>