<?php

	class User {
		function __construct(){
			print "In User constructor<br>";
		}
	}
	class Employee extends User{
		function __construct(){
			print "In Employee constructor<br>";
		}
	}
	class Manager extends Employee{
	
	}
	
	$user = new User();
	$employee = new Employee();
	$manager = new Manager();
?>
	