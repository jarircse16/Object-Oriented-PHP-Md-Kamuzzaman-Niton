<?php

	class Controller {
		
		private $book;
		
		public function __construct() {
			
			$this->book = new Book ("Book on PHP");
		}
		
		public function showbook() {
			
			echo "Book Name: " . $this->book->getbook();
		}
	}
	
	class Book {
		
		protected $book_name;
		
		public function __construct($name){
			
			$this->book_name = $name;
			
		}
		public function getbook(){
			return $this->book_name;
		}
	}
	
	$con = new Controller ();
	$con -> showbook();
	?>