<?php
	class Post{
		private $post = "";
		
		public function __construct($post){
			$this->post = $post;
		}
		public function showPost(){
			echo $this->post . "<br>";
		}
	}
	
	class User{
		private $name = "";
		private $posts = [];
		
		public function __construct($name){
			$this->name = $name;
		}
		public function showName(){
			echo "All posts from " . $this->name . ":<br>";
		}
		public function addPost(Post $post){
			if($post != null && !empty($post)){
				$this->posts[] = $post;
			}
		}
		public function getPosts(){
			return $this->posts;
		}
		public function resetPosts(){
			unset($this->posts);
		}
	}
	
	$user = new User ("Jarir");
	$user->resetPosts();
	
	$p = new Post("Sample Post 1");
	$user->addPost($p);
	$user-> addPost(new Post("Sample Post 2"));
	$user-> addPost(new Post("Sample Post 3"));
	
	$user->showName();
	$posts = $user->getPosts();
	foreach($posts as $post){
		$post->showPost();
	}
	?>
		