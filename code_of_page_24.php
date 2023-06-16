<?php

class Employee {
    // Property declaration
    public $employee_name = "";
    public $employee_dob = "";
    public $employee_gender = "";
    public $employee_designation = "";
    public $employee_salary = 0.00;

    // Method declaration
    public function printInfo()
    {
        echo "Employee Information:<br>";
        echo "Name: " . $this->employee_name . "<br>";
        echo "DoB: " . $this->employee_dob . "<br>";
        echo "Gender: " . $this->employee_gender . "<br>";
        echo "Designation: " . $this->employee_designation . "<br>";
        echo "Salary: " . number_format($this->employee_salary, 2, '.', ',') . "<br><br>";
    }
}

class Role {
    const DEFAULT_ROLE = "Admin";

    public function showRole()
    {
        echo "Default Role is: " . self::DEFAULT_ROLE;
    }
}

$employee = new Employee();
$employee->employee_name = "Jarir";
$employee->employee_dob = "1999-04-03";
$employee->employee_gender = "Male";
$employee->employee_designation = "Manager";
$employee->employee_salary = 500000.00;

$employee->printInfo();
?>
