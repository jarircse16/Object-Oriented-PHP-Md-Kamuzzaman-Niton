<?php

	Class User {
		
		private $id = "";
		private $username = "";
		private $active = "";
		
		public function __construct($id,$username,$active){
			$this->id = $id;
			$this->username = $username;
			$this->active = $active;
		}
		
		public function showUserInfo(){
			echo "ID: " . $this->id . "<br>";
			echo "Username: " . $this->username . "<br>";
			echo "Active Status: " . $this->active . "<br>";
		}
	}
	
	function readUserFromDatabase(&$users) {
		
		$table_data = [ [ "1", "jarircse16@gmail.com" , "1" ] , [ "2" , "adminpassword@gmail.com" , "1"] ];
		
		foreach($table_data as $td){
			$id = $td[0];
			$name = $td[1];
			$active = $td[2];
			$users[] = new User($id, $name, $active);
		}
	}
	
	$users = [];
	
	readUserFromDatabase($users);
	$i = 1;
	foreach($users as $u) {
		echo "<br>User # " . $i . ":<br>";
		$u->showUserInfo();
		$i++;
	}
	
	?>
			