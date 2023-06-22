<?php

	class DBConnection {
		
		private $instance_count =0;
		private $connection_count = 0;
		
		public function __construct(){
			$this->instance_count++;
			$this->connection_count++;
		}
		
		public function getInstanceCount(){
			return $this->instance_count;
		}
		public function getConnectionCount(){
			return $this->connection_count;
		}
		public function increaseInstanceCount(){
			$this->instance_count++;
		}
		public function increaseConnectionCount(){
			$this->connection_count++;
		}
	}
	
	$dbc1 = new DBConnection();
	$dbc2 = new DBConnection();
	
	$dbc1->increaseInstanceCount();
	$dbc1->increaseConnectionCount();
	
	echo "Value in Instance 1: " . $dbc1->getInstanceCount() . " Connection Count in Instance 1: " . $dbc1->getConnectionCount();
	echo "<br>";
	echo "Value in Instance 2: " . $dbc2->getInstanceCount() . " Connection Count in Instance 2: " . $dbc2->getConnectionCount();
	?>