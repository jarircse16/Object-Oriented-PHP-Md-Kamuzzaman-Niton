<?php

class Sample{
		
		private function privateMethod(){
			echo "I am private method <br>";
		}
		protected function protectedMethod(){
			echo "I am protected method <br>";
		}
		public function publicMethod(){
			echo "I am public method <br>";
		}
		function showMethodCall()
		{
			$this->privateMethod();
			$this->publicMethod();
			$this->protectedMethod();
			
		}
		
	
	}
$obj = new Sample();
$obj->showMethodCall();
?>