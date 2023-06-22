<?php

	class ServiceProvider{
		
		private $provider_name = "";
		private $provider_person = "";
		private $provider_number = "";
		
		public function __construct($provider, $contact , $number) {
			
			$this->provider_name = $provider;
			$this->provider_person = $contact;
			$this->provider_number = $number;
		}
		
		public function showProviderInfo() {
			
			echo "<br> Provider: " . $this->provider_name . "<br>";
			echo "<br> Contact Person: " . $this->provider_person . "<br>";
			echo "<br> Contact Number: " . $this->provider_number . "<br>";
			
		}
		
	}
	
	$p1 = new ServiceProvider("GOOGLE", "JARIR AHMED", "+8801719745136");
	$p2 = new ServiceProvider("FACEBOOK", "MARK JAKARBARG", "+8801911304121");
	
	$service_providers = [ [ "package_no" => "SD_34" , "provider" => $p1] , [ "package_no" => "SD_35" , "provider" => $p2]];
	
	foreach($service_providers as $sp) {
		echo "<br>Provider: <br>";
	$sp["provider"]->showProviderInfo();
	}
?>	

			