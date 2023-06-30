<?php

	class User{
		function __construct(){
			print "In User constructor<br>";
		}
	}
	class Employee extends User {
	
	}
	class Manager extends Employee{
		
	}
	$user = new User();
	$employee = new Employee();
	$manager = new Manager();
	?>