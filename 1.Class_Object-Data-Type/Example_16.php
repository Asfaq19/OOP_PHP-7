<?php
	class Product{

		private $name = "";
		private $price = 0.0;

		function __construct()
		{
			print "\nProduct Constructor \n";
			print "---------------------\n";
		}

		function __destruct()
		{
			print "Destroying ".$this->name."\n";
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function setPrice($price)
		{
			$this->price = $price;
		}

		public function showInfo()
		{
			print "Name: ".$this->name."\n";
			print "Name: ".$this->price."\n";
		}
	}

	$ram = new Product();
	$ram->setName("Transcend 8GB");
	$ram->setPrice(3500.00);
	$ram->showInfo();

	$hdd = new Product();
	$hdd->setName("WD 2TB");
	$hdd->setPrice(6500.00);
	$hdd->showInfo();
	

