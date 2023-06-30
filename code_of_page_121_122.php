<?php

	class Publication{
		protected $date;
		protected $total_pages;
		protected $copyright;
	}
	
	class Book extends Publication{
		protected $isbn;
		protected $author;
		protected $price;
	}
	class Magazine extends Publication{
		protected $edition;
		protected $editor;
		protected $price;
	}
	
	$publication = new Publication();
	$book = new Book();
	$magazine = new Magazine();
	
	var_dump($publication);
	var_dump($book);
	var_dump($magazine);

?>