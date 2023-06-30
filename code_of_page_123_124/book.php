<?php
	require_once('product.php');
	class Book extends Product{
		protected $isbn;
		protected $author;
		protected $price;
	}