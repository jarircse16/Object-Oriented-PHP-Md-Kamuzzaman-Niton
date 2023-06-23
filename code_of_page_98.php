<?php
	
	Class Post {
		
		private $post = "";
		
		public function __construct($post){
			$this->post = $post;
		}
		public function showPost(){
			echo $this->post . "\n";
		}
	}
	
	Class User {
		
		private $name = "";
		private $posts = [];
		
		public function __construct($name){
			$this->name = $name;
		}
		public function showName(){
			echo "Last post from " .$this->name . ":\n";
		}
		private function readPosts(){
			unset($this->posts);
			$this->posts[]= new Post("Sample Post 1");
			$this->posts[]= new Post("Sample Post 2");
			$this->posts[]= new Post("Sample Post 3");
		}
		
		public function getPosts(){
			$this->readPosts();
			return $this->posts;
		}
		public function getLastPost()
		{
			$this->readPosts();
			$count = count($this->posts);
			if($count >0){
				return $this->posts[$count-1];
			}
			else
			{
				return NULL;
			}
		}
	}
	$user = new User("Jarir");
	$user->showName();
	
	$last_post = $user->getLastPost();
	if($last_post != NULL){
		$last_post->showPost();
	}
	?>