<?php
	
	class Employee
	{
	//property declaration
	
	public $employee_name = " ";
	public $employee_dob = " ";
	public $employee_gender = " ";
	public $employee_designation = " ";
	public $employee_salary = 0.00;
}

$employees = []; //declare array

$employee = new Employee();
$employee->employee_name = "Jarir";
$employee->employee_dob = "04/03/1999";
$employee->employee_gender = "Male";
$employee->employee_designation = "Senior SQA Engineer";
$employee->employee_salary = "250000.00";
$employees[] =$employee; //adding to array

$employee = new Employee();
$employee->employee_name = "Eva";
$employee->employee_dob = "14/04/1999";
$employee->employee_gender = "Female";
$employee->employee_designation = "Junior Web Developer";
$employee->employee_salary = "200000.00";
$employees[] =$employee; //adding to array

foreach($employees as $employee)
{
	echo "Employee Information:";
	echo "<br>";
	echo "Name: " .$employee -> employee_name . "<br>";
	echo "DoB: " .$employee -> employee_dob . "<br>";
	echo "Gender: " .$employee -> employee_gender . "<br>";
	echo "Designation: " .$employee -> employee_designation . "<br>";
	echo "Salary: " .number_format($employee -> employee_salary,2,'.',',');
	echo "<br><br>";
}
?>

