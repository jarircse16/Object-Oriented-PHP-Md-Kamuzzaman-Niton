<?php
	
	class Employee{
		public $employee_name;
		public $employee_age;
		public $employee_salary;
		
		public function showProperties(){
			var_dump($this);
		}
	}
	
	$emp = new Employee();
	$emp->showProperties();
	?>