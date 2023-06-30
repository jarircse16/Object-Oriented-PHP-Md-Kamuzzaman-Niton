<?php
	class User{
		function __construct(){
			print"<br>In User constructor<br>";
		}
	}
	
	class Employee extends User {
		
		function __construct(){
			parent:: __construct();
			print "--In Employee constructor<br>";
		}
	}
	class Manager extends Employee {
		
		function __construct(){
			parent:: __construct();
			print "--In Manager constructor<br>";
		}
	}
	
	$user = new User();
	$employee = new Employee();
	$manager = new Manager();
?>