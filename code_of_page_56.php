<?php
class FileUtil{
	private $handle;
	private $filename;
	
	public function __construct($filename, $filemode){
		$this->filename = $filename;
		$this->handle = fopen($filename, $filemode);
	}
	
	public function __destruct(){
		if($this->handle){
			fclose($this->handle);
		}
	}
	
	public function display(){
		echo fread($this->handle, filesize($this->filename));
	}
}

$file = new FileUtil('./samplez.txt', 'r');
$file->display();

?>
<button><a href="http://127.0.0.1/PracticePhp/OOP%20PHP%20NITON/">Back</a></button>
