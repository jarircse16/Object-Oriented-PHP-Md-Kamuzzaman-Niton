<?php
	class BlogPost {
		
		private $author = "Jarir";
		private $post = "Something goes here.....";
		
		public function showInfo(){
			echo "Author : " . $this->author;
			echo "\nPost : " . $this->post;
	}
	}
	
	$data = new BlogPost();
	var_dump($data);
	?>