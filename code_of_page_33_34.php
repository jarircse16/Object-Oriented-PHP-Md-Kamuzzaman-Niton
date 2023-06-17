<?php
class Employee {
	private $employee_name = "Jarir" ;
	private $employee_age = "27" ;
	private $employee_department = "System Administrator" ;
	
	public function showInfo(){
		echo "Employee Name: " .$this->employee_name . "\n";
		echo "<br>";
		echo "Employee Age: " .$this->employee_age . "\n";
		echo "<br>";
		echo "Employee Department: " .$this->employee_department . "\n";
	}
}
 (new Employee())->showInfo();
 ?>