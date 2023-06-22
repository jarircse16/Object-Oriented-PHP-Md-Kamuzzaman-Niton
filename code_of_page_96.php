<?php
	
	class Post {
		
		private $post = "";
		
		public function __construct($post){
			$this->post = $post;
		}
		public function setPost($post){
			$this->post = $post;
		}
		public function showPost(){
			echo $this->post . "<br>";
		}
	}
	
	class User{
		
		private $name = "";
		private $posts =  [];
		
		public function __construct($name){
			$this->name = $name;
		}
		public function setName($name){
			$this->name = $name;
		}
		public function showName(){
			echo "Posts from " . $this->name . ":<br>";
		}
		public function showPosts() {
			unset($this->posts);
			$this->posts[] = new Post("Sample Post 1");
			$this->posts[] = new Post("Sample Post 2");
			$this->posts[] = new Post("Sample Post 3");
			
			foreach($this->posts as $post){
				$post->showPost();
			}
		}
	}
	
	$user = new User ("Niton");
	$user->showName();
	$user->showPosts();
	?>