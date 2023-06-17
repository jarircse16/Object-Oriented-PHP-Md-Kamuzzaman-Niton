<?php
Class Sample {
	public $public = 'Public Member<br>';
	private $private = 'Private Member<br>';
	protected $protected = 'Protected Member';
	
	public static $static_public = 'Public Static';
	private static $static_private = 'Private Static';
	protected static $static_protected = 'Protected Static';
}

$obj = new Sample;
print_r($obj);
?>
