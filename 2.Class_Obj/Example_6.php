<?php

	class ServiceProvider{

		private $provider_name = "";
		private $contact_person = "";
		private $contact_number = "";

		public function __construct($provider,$contact,$number)
		{
			$this->provider_name =$provider;
			$this->contact_person=$contact;
			$this->contact_number=$number;
		}

		public function showProviderInfo()
		{
			echo "\nProvider : ".$this->provider_name."\n";
			echo "Contact Person : ".$this->contact_person."\n";
			echo "Contact Number : ".$this->contact_number."\n";
		}
	}

	$p1 = new ServiceProvider("Company","Khan","+880101010");
	$p2 = new ServiceProvider("Institute","Imran","+881212010");

	$Service_providers = [
		["provider" =>$p1],
		["provider" =>$p2],
		["provider" =>$p1],		
	];

	foreach($Service_providers as $sp){
		echo "Provider : =============";
		$sp["provider"]->showProviderInfo();
		
		print_r($sp["provider"]);	
	}
	print_r($sp["provider"]);

?>