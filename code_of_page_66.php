<?php
	
	class DbConnection {
		
		protected static $_instance = NULL;
		
		protected function __construct (){
			// Write Constructor Code here
		}
		public static function getInstance(){
			
			if(!self::$_instance instanceof self){
				self::$_instance = new self;
			}
			return self::$_instance;
		}
		public function __clone(){
			// do nothing
		}
		public function __destruct() {
			
			self::$_instance = NULL;
		}
	}
	$dbCon1 = DbConnection::getInstance();
	$dbCon2 = DbConnection::getInstance();
	$dbCon3 = DbConnection::getInstance();
	
	var_dump($dbCon1);
	var_dump($dbCon2);
	var_dump($dbCon3);
	?>
		