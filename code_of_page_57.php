<?php
class SampleAuth {
	
	private $session = null;
	
	function __construct($username,$password){
		//
		$this->authUser($username,$password);
	}
	private function authUser($username, $password){
		// code here
		echo "Authenticating User <br>";
		$this -> session = "THESAMPLESESSION";
	}
	private function releaseUserSession(){
		//code here
		echo "Release User Session <br>";
	}
	function __destruct(){
		if($this->session != null)
		{
			$this->releaseUserSession();
		}
	}
}
$user = new SampleAuth("admin","password");
unset($user);
?>
<button><a href="http://127.0.0.1/PracticePhp/OOP%20PHP%20NITON/">Back</a></button>
