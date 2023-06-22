<?php 

	Class User {
		private $login_id = "";
		public function __construct ($id) {
			$this->login_id = $id;
		}
	}
	
	class Account {
		private $login_id = "";
		
		public function __construct($id){
			$this->login_id = $id;
		}
	}
	
	$u1 = new User ("Jarir");
	$u2 = new User ("Riasat");
	$u3 = new User ("Zohad");
	$u4 = $u1;
	
	$a1 = new Account ("Jarir");
	
	echo $u1==$u2? "u1==u2 is True<br>":"u1==u2 is False<br>";
	echo $u1==$u3? "u1==u3 is True<br>":"u1==u3 is False<br>";
	echo $u1==$u4? "u1==u2 is True<br>":"u1==u4 is False<br>";
	echo $a1==$u1? "a1==u1 is True<br>":"a1==u1 is False<br>";
	echo $u1===$u2? "u1===u2 is True<br>":"u1===u2 is False<br>";
	echo $u1===$u3? "u1===u3 is True<br>":"u1===u3 is False<br>";
	echo $u1===$u4? "u1===u4 is True<br>":"u1===u4 is False<br>";
	echo $a1===$u1? "a1===u1 is True<br>":"a1===u1 is False<br>";
	?>